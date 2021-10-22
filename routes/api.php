<?php

use App\Http\Controllers\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('skim-periode',[Chart::class,'chartSkimPeriode'])->name('skim.periode');
Route::get('skim-total-semua',[Chart::class,'chartSkimTotalSemua'])->name('skim.total.semua');
