<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Penelitian;
use Illuminate\Support\Collection;
use DB;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function sejarahsingkat()
    {
        return view('sejarahsingkat');
    }
    public function visimisi()
    {
        return view('visimisi');
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function statistik()
    {
        return view('statistik');
    }
}
