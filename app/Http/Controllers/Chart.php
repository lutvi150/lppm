<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Chart extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function chartSkimPeriode(Type $var = null)
    {
        $start = microtime(true);
        $masSkim = DB::table('mast_skim_int')->select("id", "jenis_program")->get();
        $dataSkim = null;
        if ($masSkim !== null) {
            foreach ($masSkim as $key => $value) {
                $dataSkim[] = [
                    "name" => $value->jenis_program,
                    "data" => [107, 31, 635, 203, 100],
                ];
            }
        }
        $data = [
            'status' => 'success',
            'executed_time' => microtime(true) - $start,
            'series' => $dataSkim,
            'categories' => ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
        ];
        return response()->json($data);
    }
    public function chartSkimTotalSemua(Type $var = null)
    {
        $start = microtime(true);
        $skim_penelitian = DB::table('mast_skim_penelitian')->select('id', 'skim_penelitian')->get();
        $dataSkim = null;
        if ($skim_penelitian !== null) {
            foreach ($skim_penelitian as $key => $value) {
                $dataSkim[] = [
                    "name" => $value->skim_penelitian,
                    "y" => $this->countSkim($value->id),
                ];
            }
        }
        $data = [
            'status' => 'success',
            'executed_time' => microtime(true) - $start,
            'series' => $dataSkim,
            'categories' => ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
        ];

        return response()->json($data);
    }
    public 
    function countSkim($id)
    {
        $data = DB::table('tr_penelitian')->where('id_skim_penelitian', $id)->count();
        return $data;
    }

}
