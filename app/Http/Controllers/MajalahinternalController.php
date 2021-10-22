<?php

namespace App\Http\Controllers;

use App\Models\Majalahinternal;
use Illuminate\Http\Request;

class MajalahinternalController extends Controller
{
    public function majalahinternal1()
    {
        $majalahinternal = Majalahinternal::all();
        return view('arsip/majalahinternal',compact('majalahinternal'));
    }
    public function detailmajalahinternal($id)
    {
        $majalahinternal = Majalahinternal::where('id',$id)
                    ->get();

    return view('detailmajalahinternal',compact('majalahinternal'));
    }
}
