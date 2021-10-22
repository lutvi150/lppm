<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Carbon\Carbon;
use App\Models\Majalah;
use App\Helpers\General;
use App\Models\Prosiding;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use App\Models\Majalahinternal;
use App\Models\Majalaheksternal;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request){
        $jumlahpenelitian   =  Penelitian::all()->count();
        $jumlahpengabdian   =  Pengabdian::all()->count();
        $jumlahprosiding=   Prosiding::all()->count();
        $jumlahtugasakhir=  Tugasakhir::all()->count();
        $jumlahmajalahinternal  =   Majalahinternal::get()->count();
        $jumlahmajalaheksternal=    Majalaheksternal::get()->count();

        $tahun_penelitian = DB::table('penelitians')
                 ->select('tahun', DB::raw('count(*) as total'))
                 ->groupBy('tahun')
                 ->get();
        $fakultas_penelitian = DB::table('penelitians')
        ->select('fakultas', DB::raw('count(*) as total'))
        ->groupBy('fakultas')
        ->get();
        $kategori_penelitian = DB::table('penelitians')
        ->select('kategori', DB::raw('count(*) as total'))
        ->groupBy('kategori')
        ->get();

        $tahun_pengabdian = DB::table('pengabdians')
        ->select('tahun', DB::raw('count(*) as total'))
        ->groupBy('tahun')
        ->get();
        $fakultas_pengabdian = DB::table('pengabdians')
        ->select('fakultas', DB::raw('count(*) as total'))
        ->groupBy('fakultas')
        ->get();
        $kategori_pengabdian = DB::table('pengabdians')
        ->select('kategori', DB::raw('count(*) as total'))
        ->groupBy('kategori')
        ->get();

        $wisuda_tugasAkhir = DB::table('tugas_akhir')
        ->select('wisuda', DB::raw('count(*) as total'))
        ->groupBy('wisuda')
        ->get();
        $fakultas_tugasAkhir = DB::table('tugas_akhir')
        ->select('fakultas', DB::raw('count(*) as total'))
        ->groupBy('fakultas')
        ->get();



        return view('admin.main',compact(['jumlahpenelitian','jumlahpengabdian','jumlahprosiding','jumlahprosiding'
        ,'jumlahtugasakhir','jumlahmajalaheksternal','jumlahmajalahinternal',
        'tahun_penelitian',
        'fakultas_penelitian',
        'kategori_penelitian',
        'tahun_pengabdian',
        'fakultas_pengabdian',
        'kategori_pengabdian',
        'wisuda_tugasAkhir',
        'fakultas_tugasAkhir',]));
    }

    public function penelitian(Request $request){
        $penelitian = Penelitian::latest()->get();
        $kategori = getEnumValues('penelitians','kategori');
        $fakultas = getEnumValues('penelitians','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.penelitian', ['penelitian' => $penelitian,'kategori' => $kategori,'fakultas' => $fakultas,'arr' => $arr]);
    }

    public function createPenelitian(Request $request){

        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'tahun' => 'required|numeric',
            'peneliti' => 'required',
            'kategori' => 'required',
            'fakultas' => 'required',
            'npp' => 'required|numeric',
            'nidn' => 'required',
            'file' => 'mimes:pdf',
            'jabfung' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }elseif($validator->passes()){


            $data = [
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'peneliti' => $request->peneliti,
                'kategori' => $request->kategori,
                'fakultas' => $request->fakultas,
                'npp' => $request->npp,
                'nidn' => $request->nidn,
                'jabfung' => $request->jabfung,
            ];

            if($request->hasFile('file')){
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $data['pdf'] = $fileName;
            }
            if($request->id == ''){
                Penelitian::create($data);
                $request->session()->flash('pesan','Data Penelitian berhasil ditambah.');
                return redirect()->back();
            }else{
                $penelitian = Penelitian::findOrFail($request->id);
                if($request->hasFile('file')){
                    if($penelitian['pdf'] != $request->file('file')){
                        Storage::disk('public')->delete('uploads/'.$penelitian['pdf']);
                        $fileName = time().'_'.$request->file->getClientOriginalName();
                        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                        $data['pdf'] = $fileName;
                    }else{
                        $data['pdf'] = $request->file('file');
                    }
                }
                Penelitian::whereId($request->id)->update($data);
                $request->session()->flash('pesan','Data Penelitian berhasil diubah.');
                return redirect()->route('add.penelitian');
            }

        }
    }
    public function insert(Request $request){

        $upload=new upload;
        $upload->pdf=$request->filename;
        $upload->save();
        return redirect('/pdf');
    }

    public function editPenelitian(Request $request,$id){
        $data = Penelitian::findOrFail($id);
        $kategori = getEnumValues('penelitians','kategori');
        $penelitian = Penelitian::latest()->get();
        $fakultas = getEnumValues('penelitians','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.penelitian',compact(['data','kategori','fakultas','penelitian','arr']));
    }

    public function deletePenelitian($id){
        $data = Penelitian::findOrFail($id);
        Storage::disk('public')->delete('uploads/'.$data['pdf']);
        request()->session()->flash('pesan','Data Penelitian Berhasil Dihapus.');
        return redirect()->route('add.penelitian');
    }

    public function pengabdian(Request $request){
        $pengabdian = Pengabdian::latest()->get();
        $kategori = getEnumValues('pengabdians','kategori');
        $fakultas = getEnumValues('pengabdians','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.pengabdian',compact(['pengabdian','kategori','fakultas','arr']));
    }

    public function createPengabdian(Request $request){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'tahun' => 'required|numeric',
            'peneliti' => 'required',
            'kategori' => 'required',
            'fakultas' => 'required',
            'npp' => 'required|numeric',
            'file' => 'mimes:pdf',
            'nidn' => 'required',
            'jabfung' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }elseif($validator->passes()){
            $data = [
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'peneliti' => $request->peneliti,
                'kategori' => $request->kategori,
                'fakultas' => $request->fakultas,
                'npp' => $request->npp,
                'nidn' => $request->nidn,
                'jabfung' => $request->jabfung
            ];
            if($request->hasFile('file')){
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $data['pdf'] = $fileName;
            }
            if($request->id == ''){
                Pengabdian::create($data);
                $request->session()->flash('pesan','Data Pengabdian berhasil ditambah.');
                return redirect()->back();
            }
                else{
                    $pengabdian = pengabdian::findOrFail($request->id);
                    if($request->hasFile('file')){
                        if($pengabdian['pdf'] != $request->file('file')){
                            Storage::disk('public')->delete('uploads/'.$pengabdian['pdf']);
                            $fileName = time().'_'.$request->file->getClientOriginalName();
                            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                            $data['pdf'] = $fileName;
                        }else{
                            $data['pdf'] = $request->file('file');
                        }
                    }
                    pengabdian::whereId($request->id)->update($data);
                    $request->session()->flash('pesan','Data pengabdian berhasil diubah.');
                    return redirect()->route('add.pengabdian');
            }

        }
    }

    public function editPengabdian(Request $request,$id){
        $data = Pengabdian::findOrFail($id);
        $kategori = getEnumValues('pengabdians','kategori');
        $pengabdian = Penelitian::latest()->get();
        $fakultas = getEnumValues('pengabdians','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
         return view('admin.pengabdian',compact(['data','kategori','fakultas','pengabdian','arr']));
    }

    public function deletePengabdian($id){
        $data = Penelitian::findOrFail($id);
        Storage::disk('public')->delete('uploads/'.$data['pdf']);
        request()->session()->flash('pesan','Data Penelitian Berhasil Dihapus.');
        return redirect()->route('add.penelitian');
    }
    public function majalahinternal(Request $request){
        $majalahinternal = Majalahinternal::latest()->get();
        $fakultas = getEnumValues('majalahinternals','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.majalahinternal',compact('majalahinternal','fakultas','arr'));
    }

    public function createMajalahinternal(Request $request){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'peneliti' => 'required',
            'tahun' => 'required|numeric',
            'fakultas' => 'required',
            'npp' => 'required|numeric',
            'file' => 'mimes:pdf',
            'nidn' => 'required',
            'jabfung' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }elseif($validator->passes()){
            $data = [
                'judul' => $request->judul,
                'peneliti' => $request->peneliti,
                'tahun' => $request->tahun,
                'fakultas' => $request->fakultas,
                'npp' => $request->npp,
                'nidn' => $request->nidn,
                'jabfung' =>$request->jabfung
            ];
            if($request->hasFile('file')){
                $tujuan_upload = 'assetAdmin/upload';
                $file = $request->file('file');
                // $file->move($tujuan_upload,$file->getClientOriginalName());

                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $file->move($tujuan_upload,$fileName);
                // $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $data['pdf'] = $fileName;
            }
            if($request->id == ''){
                Majalahinternal::create($data);
                $request->session()->flash('pesan','Data Majalah berhasil ditambah.');
                return redirect()->back();
            }

                //
                else{
                    $majalahinternal = Majalahinternal::findOrFail($request->id);
                    if($request->hasFile('file')){
                        if($majalahinternal['pdf'] != $request->file('file')){
                            Storage::disk('public')->delete('uploads/'.$majalahinternal['pdf']);
                            $fileName = time().'_'.$request->file->getClientOriginalName();
                            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                            $data['pdf'] = $fileName;
                        }else{
                            $data['pdf'] = $request->file('file');
                        }
                    }
                    Majalahinternal::whereId($request->id)->update($data);
                    $request->session()->flash('pesan','Data Majalah Internal berhasil diubah.');
                    return redirect()->route('add.majalahinternal');
                }
    
            }
        }
            

    public function editMajalahinternal(Request $request,$id){
        $majalahinternal = Majalahinternal::latest()->get();
        $data = Majalahinternal::findOrFail($id);
        $fakultas = getEnumValues('majalahinternals','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.majalahinternal',compact(['majalahinternal','data','fakultas','arr']));
    }

    public function deleteMajalahinternal($id){
        Majalahinternal::find($id)->delete();
        request()->session()->flash('pesan','Data Majalah berhasil dihapus.');
        return redirect()->route('add.majalahinternal');
    }

    public function majalaheksternal(Request $request){
        $majalaheksternal = Majalaheksternal::latest()->get();
        $fakultas = getEnumValues('majalaheksternals','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.majalaheksternal',compact('majalaheksternal','fakultas','arr'));
    }

    public function createMajalaheksternal(Request $request){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'peneliti' => 'required',
            'tahun' => 'required|numeric',
            'fakultas' => 'required',
            'npp' => 'required|numeric',
            'file' => 'mimes:pdf',
            'nidn' => 'required',
            'jabfung' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }elseif($validator->passes()){
            $data = [
                'judul' => $request->judul,
                'peneliti' => $request->peneliti,
                'tahun' => $request->tahun,
                'fakultas' => $request->fakultas,
                'npp' => $request->npp,
                'nidn' => $request->nidn,
                'jabfung' =>$request->jabfung
            ];
            if($request->hasFile('file')){
                $tujuan_upload = 'assetAdmin/upload';
                $file = $request->file('file');
                // $file->move($tujuan_upload,$file->getClientOriginalName());

                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $file->move($tujuan_upload,$fileName);
                // $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $data['pdf'] = $fileName;
            }
            if($request->id == ''){
                Majalaheksternal::create($data);
                $request->session()->flash('pesan','Data Majalah berhasil ditambah.');
                return redirect()->back();
            }
            else{
                $majalaheksternal = Majalaheksternal::findOrFail($request->id);
                if($request->hasFile('file')){
                    if($majalaheksternal['pdf'] != $request->file('file')){
                        Storage::disk('public')->delete('uploads/'.$majalaheksternal['pdf']);
                        $fileName = time().'_'.$request->file->getClientOriginalName();
                        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                        $data['pdf'] = $fileName;
                    }else{
                        $data['pdf'] = $request->file('file');
                    }
                }
                majalaheksternal::whereId($request->id)->update($data);
                $request->session()->flash('pesan','Data Majalah Eksternal berhasil diubah.');
                return redirect()->route('add.majalaheksternal');
            }

        }
    }

    public function editMajalaheksternal(Request $request,$id){
        $majalaheksternal = Majalaheksternal::latest()->get();
        $data = Majalaheksternal::findOrFail($id);
        $fakultas = getEnumValues('majalaheksternals','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.majalaheksternal',compact(['majalaheksternal','data','fakultas','arr']));
    }

    public function deleteMajalaheksternal($id){
        Majalaheksternal::find($id)->delete();
        request()->session()->flash('pesan','Data Majalah berhasil dihapus.');
        return redirect()->route('add.majalaheksternal');
    }

    public function prosiding(Request $request){
        $prosiding = Prosiding::latest()->get();
        $kategori = getEnumValues('prosiding','kategori');
        $fakultas = getEnumValues('prosiding','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.prosiding',compact('prosiding','kategori','fakultas','arr'));
    }

    public function createProsiding(Request $request){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'periode' => 'required',
            'issn' => 'required',
            'kategori' => 'required',
            'peneliti' => 'required',
            'file' => 'mimes:pdf',
            'fakultas' => 'required',
            'npp' => 'required|numeric',
            'nidn' => 'required',
            'jabfung' => 'required'

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }elseif($validator->passes()){
            $data = [
                'judul' => $request->judul,
                'periode' => $request->periode,
                'issn' => $request->issn,
                'peneliti' => $request->peneliti,
                'kategori' => $request->kategori,
                'fakultas' => $request->fakultas,
                'npp' => $request->npp,
                'nidn' => $request->nidn,
                'jabfung' => $request->jabfung
            ];
            if($request->hasFile('file')){
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $data['pdf'] = $fileName;
            }
            if($request->id == ''){
                Prosiding::create($data);
                $request->session()->flash('pesan','Data Prosiding berhasil ditambah.');
                return redirect()->back();
            }else{

                    $prosiding = prosiding::findOrFail($request->id);
                    if($request->hasFile('file')){
                        if($prosiding['pdf'] != $request->file('file')){
                            Storage::disk('public')->delete('uploads/'.$prosiding['pdf']);
                            $fileName = time().'_'.$request->file->getClientOriginalName();
                            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                            $data['pdf'] = $fileName;
                        }else{
                            $data['pdf'] = $request->file('file');
                        }
                    }
                    prosiding::whereId($request->id)->update($data);
                    $request->session()->flash('pesan','Data  Prasidang berhasil diubah.');
                    return redirect()->route('add.prosiding');
            }

        }
    }

    public function editProsiding(Request $request,$id){
        $prosiding = Prosiding::latest()->get();
        $data = Prosiding::findOrFail($id);
        $kategori = getEnumValues('prosiding','kategori');
        $fakultas = getEnumValues('prosiding','fakultas');
        $arr = ['Asisten Ahli','Lektor Kepala','Guru Besar'];
        return view('admin.prosiding',compact(['data','prosiding','kategori','fakultas','arr']));
    }

    public function deleteProsiding($id){
        Prosiding::find($id)->delete();
        request()->session()->flash('pesan','Data Prosiding berhasil dihapus.');
        return redirect()->route('add.prosiding');
    }

    public function tugas_akhir(Request $request){
        $fakultas = getEnumValues('tugas_akhir','fakultas');
        $tugas_akhir = TugasAkhir::latest()->get();
        $cover=['Ada','Tidak Ada'];
        $isi=['Ada','Tidak Ada'];
        $setujuta=['Ada','Tidak Ada'];
        $sahta=['Ada','Tidak Ada'];
        $publikasi=['Ada','Tidak Ada'];
        $asli=['Ada','Tidak Ada'];
        $jurnal=['Ada','Tidak Ada'];
        $bab1=['Ada','Tidak Ada'];
        $bab2=['Ada','Tidak Ada'];
        $bab3=['Ada','Tidak Ada'];
        $bab4=['Ada','Tidak Ada'];
        $bab5=['Ada','Tidak Ada'];
        $bab6=['Ada','Tidak Ada'];
        $dapus=['Ada','Tidak Ada'];



        $arr = [];
        for($i = 1; $i <= 70; $i++){
            $arr[] = $i;
        }
        return view('admin.tugas_akhir',compact('fakultas','tugas_akhir', 'cover','isi','setujuta','sahta','publikasi','asli','jurnal','bab1','bab2','bab3','bab4','bab5','bab6','dapus','arr'));
    }

    public function createTugasAkhir(Request $request){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'nama' => 'required',
            'fakultas' => 'required',
            'nim' => 'required',
            'file' => 'mimes:pdf',
            'wisuda' => 'required|numeric',
            'abstrak'=>'required',
            'cover'=>'required'

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }elseif($validator->passes()){
            $data = [
                'judul' => $request->judul,
                'nama' => $request->nama,
                'fakultas' => $request->fakultas,
                'nim' => $request->nim,
                'wisuda' => $request->wisuda,
                'abstrak'=>$request->abstrak,
                'cover'=>$request->cover,
                'judulindo'=>$request->judulindo,
                'juduling'=>$request->juduling,
                'isi'=>$request->isi,
                'setujuta'=>$request->setujuta,
                'sahta'=>$request->sahta,
                'publikasi'=>$request->publikasi,
                'asli'=>$request->asli,
                'jurnal'=>$request->jurnal,
                'bab1'=>$request->bab1,
                'bab2'=>$request->bab2,
                'bab3'=>$request->bab3,
                'bab4'=>$request->bab4,
                'bab5'=>$request->bab5,
                'bab6'=>$request->bab6,
                'dapus'=>$request->dapus
            ];
            if($request->hasFile('file')){
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $data['pdf'] = $fileName;
            }
            if($request->id == ''){
                TugasAkhir::create($data);
                $request->session()->flash('pesan','Data Tugas Akhir berhasil ditambah.');
                return redirect()->back();
            }else{
                TugasAkhir::whereId($request->id)->update($data);
                $request->session()->flash('pesan','Data Tugas Akhir berhasil diubah.');
                return redirect()->route('add.tugas_akhir');
            }

        }
    }

    public function editTugasAkhir(Request $request,$id){
        $tugas_akhir = TugasAkhir::latest()->get();
        $data = TugasAkhir::findOrFail($id);
        $fakultas = getEnumValues('tugas_akhir','fakultas');
        $cover=['Ada','Tidak Ada'];
        $isi=['Ada','Tidak Ada'];
            $setujuta=['Ada','Tidak Ada'];
            $sahta=['Ada','Tidak Ada'];
            $publikasi=['Ada','Tidak Ada'];
            $asli=['Ada','Tidak Ada'];
            $jurnal=['Ada','Tidak Ada'];
            $bab1=['Ada','Tidak Ada'];
            $bab2=['Ada','Tidak Ada'];
            $bab3=['Ada','Tidak Ada'];
            $bab4=['Ada','Tidak Ada'];
            $bab5=['Ada','Tidak Ada'];
            $bab6=['Ada','Tidak Ada'];
            $dapus=['Ada','Tidak Ada'];

        $arr = [];
        for($i = 1; $i <= 70; $i++){
            $arr[] = $i;
        }
        return view('admin.tugas_akhir',compact('data','fakultas','tugas_akhir', 'cover','isi','setujuta','sahta','publikasi','asli','jurnal','bab1','bab2','bab3','bab4','bab5','bab6','dapus','arr'));
    }


    public function deleteTugasAkhir($id){
        TugasAkhir::find($id)->delete();
        request()->session()->flash('pesan','Data Tugas Akhir berhasil dihapus.');
        return redirect()->route('add.tugas_akhir');
    }
}
