<?php

namespace App\Http\Controllers;

use App\Models\Prosiding;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function penelitian()
    {
        $penelitian = Penelitian::all();
        return view('arsip/penelitianudinus',['penelitian'=>$penelitian]);
        // return $penelitian;
    }
    public function pengabdian1()
    {
        $pengabdian1 = Pengabdian::all();
        return view('arsip/pengabdian',['pengabdian1' => $pengabdian1]);
    }
    public function prosiding1()
    {
        $prosiding1 = Prosiding::all();
        return view('arsip/prosiding',compact('prosiding1'));
    }
    public function tugasakhir()
    {
        $tugas_akhir = TugasAkhir::all();
        $fakultas = getEnumValues('tugas_akhir','fakultas');

        return view('arsip/tugasakhir',compact('tugas_akhir','fakultas'));
    }

    public function tambah()
    {
        $penelitian = Penelitian::all();
        return view('tambah',['penelitian'=>$penelitian]);
    }
    public function adddata(Request $request)
    {
        $data = Penelitian::create($request->all());
        return redirect('tambah')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function detail($id)
    {
        $penelitian = Penelitian::where('id',$id)
                    ->get();

        return view('arsip/detailpenelitian',['penelitian'=>$penelitian]);
    }
    public function detailpengabdian($id)
    {
        $pengabdian = Pengabdian::where('id',$id)
                    ->get();

        return view('detailpengabdian',['pengabdian'=>$pengabdian]);
    }
      public function detailprosiding($id)
    {
        $prosiding = Prosiding::where('id',$id)
                    ->get();

        return view('detailprosiding',['prosiding'=>$prosiding]);
    }
    public function detailtugasakhir($id)
    {
        $tugasakhir = Tugasakhir::where('id',$id)
                    ->get();

        return view('detailtugasakhir',['tugasakhir'=>$tugasakhir]);
    }

    public function cari(Request $request)
    {
        $penelitian = Penelitian::where('judul','like', '%'.$request->cari.'%')
                        ->orWhere('peneliti', 'like', '%'.$request->cari.'%')->get();

        if(($penelitian->count())<1)
        {
            $penelitian = null;
        }
        return view('arsip/caripeneliti',['penelitian'=>$penelitian]);
        // dd($penelitian);
    }

}
