<?php

namespace App\Http\Controllers;

use App\Models\Majalaheksternal;
use Illuminate\Http\Request;

class MajalaheksternalController extends Controller
{
    public function majalaheksternal1()
    {
        $majalaheksternal = Majalaheksternal::all();
        return view('arsip/majalaheksternal',compact('majalaheksternal'));
    }
    public function detailmajalaheksternal($id)
    {
        $majalaheksternal = Majalaheksternal::where('id',$id)
                    ->get();

    return view('detailmajalaheksternal',compact('majalaheksternal'));
    }
}
