<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Majalah;

class MajalahController extends Controller
{
    public function majalahinternal()
    {
        $majalah = Majalah::where('tipe','internal')->get();
        return view('arsip/majalahinternal',['majalahinternal'=>$majalah]);
        // return $majalah;
    }
    public function majalaheksternal()
    {
        $majalah = Majalah::where('tipe','eksternal')->get();
        return view('arsip/majalaheksternal',['majalaheksternal'=>$majalah]);
    }
    public function detaileksternal($id)
    {
        $majalaheksternal = Majalah::where('id',$id)
                    ->get();

        return view('detailmajalaheksternal',['detaileksternal'=>$majalaheksternal]);
    }
    public function prosiding()
    {
        return view('arsip/prosiding');
    }
    public function tugasakhir()
    {
        return view('arsip/tugasakhir');
    }

    public function tambah()
    {
        $penelitian = majalah::all();
        return view('tambah',['majalah'=>$majalah]);
    }
    public function adddata(Request $request)
    {
        $data = majalah::create($request->all());
        return redirect('tambah')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function detail($id)
    {
        $penelitian = majalah::where('id',$id)
                    ->get();

        return view('arsip/detailmajalah',['majalah'=>$majalah]);
    }

    public function cari(Request $request)
    {
        $majalah = majalah::where('judul','like', '%'.$request->cari.'%')
                        ->orWhere('peneliti', 'like', '%'.$request->cari.'%')->get();

        if(($majalah->count())<1)
        {
            $majalah = null;
        }
        return view('arsip/carimajalah',['majalah'=>$majalah]);
        // dd($majalah);
    }

}
