<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\UserController;
use App\http\Controllers\MajalahController;
use App\http\Controllers\MajalaheksternalController;
use App\http\Controllers\MajalahinternalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'home']);
Route::view('/design', 'newTemplate.home');
Route::get('/sejarahsingkat', [PagesController::class, 'sejarahsingkat']);
Route::get('/visimisi', [PagesController::class, 'visimisi']);
Route::get('/kontak', [PagesController::class, 'kontak']);
Route::get('/statistik', [PagesController::class, 'statistik']);


Route::get('/majalaheksternal1',[MajalaheksternalController::class, 'majalaheksternal1']);
Route::get('/majalaheksternal/detailmajalaheksternal/{id}',[MajalaheksternalController::class, 'detailmajalaheksternal']);
Route::get('/majalahinternal1',[MajalahinternalController::class, 'majalahinternal1']);
Route::get('/majalahinternal/detailmajalahinternal/{id}',[MajalahinternalController::class, 'detailmajalahinternal']);
Route::get('/penelitianudinus',[PenelitianController::class, 'penelitian']);
Route::get('/pengabdian1',[PenelitianController::class, 'pengabdian1']);
Route::get('/prosiding1',[PenelitianController::class, 'prosiding1']);
Route::get('/tugasakhir',[PenelitianController::class, 'tugasakhir']);

Route::get('/tambah',[PenelitianController::class, 'tambah']);
Route::post('/adddata',[PenelitianController::class, 'adddata']);
Route::get('/penelitian/detail/{id}',[PenelitianController::class, 'detail']);
Route::get('/penelitian/detailpengabdian/{id}',[PenelitianController::class, 'detailpengabdian']);
Route::get('/penelitian/detailprosiding/{id}',[PenelitianController::class, 'detailprosiding']);
Route::get('/penelitian/detailtugasakhir/{id}',[PenelitianController::class, 'detailtugasakhir']);
Route::post('/penelitian/cari',[PenelitianController::class, 'cari']);

Route::get('/user',[UserController::class, 'user'] );


// Route::get('/','PagesController@home');
// Auth::routes();
Route::GET('/login',[LoginController::class,'show'])->name('login');
Route::POST('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::GET('/dashboard',[AdminController::class, 'index'])->name('home')->middleware('auth');
Route::GET('/penelitian',[AdminController::class, 'penelitian'])->name('penelitian')->middleware('auth');
Route::POST('/penelitian',[AdminController::class, 'createPenelitian'])->name('add.penelitian')->middleware('auth');
Route::GET('/penelitian/edit/{id}',[AdminController::class, 'editPenelitian'])->name('edit.penelitian')->middleware('auth');
Route::GET('/penelitian/delete/{id}',[AdminController::class, 'deletePenelitian'])->name('delete.penelitian')->middleware('auth');
Route::POST('/pdf',[AdminController::class,'insert']);
Route::GET('/pengabdian',[AdminController::class, 'pengabdian'])->name('pengabdian')->middleware('auth');
Route::POST('/pengabdian',[AdminController::class, 'createPengabdian'])->name('add.pengabdian')->middleware('auth');
Route::GET('/pengabdian/edit/{id}',[AdminController::class, 'editPengabdian'])->name('edit.pengabdian')->middleware('auth');
Route::GET('/pengabdian/delete/{id}',[AdminController::class, 'deletePengabdian'])->name('delete.pengabdian')->middleware('auth');

Route::GET('/majalahinternal',[AdminController::class, 'majalahinternal'])->name('majalahinternal')->middleware('auth');
Route::POST('/majalahinternal',[AdminController::class, 'createMajalahinternal'])->name('add.majalahinternal')->middleware('auth');
Route::GET('/majalahinternal/edit/{id}',[AdminController::class, 'editMajalahinternal'])->name('edit.majalahinternal')->middleware('auth');
Route::GET('/majalahinternal/delete/{id}',[AdminController::class, 'deleteMajalahinternal'])->name('delete.majalahinternal')->middleware('auth');

Route::GET('/majalaheksternal',[AdminController::class, 'majalaheksternal'])->name('majalaheksternal')->middleware('auth');
Route::POST('/majalaheksternal',[AdminController::class, 'createMajalaheksternal'])->name('add.majalaheksternal')->middleware('auth');
Route::GET('/majalaheksternal/edit/{id}',[AdminController::class, 'editMajalaheksternal'])->name('edit.majalaheksternal')->middleware('auth');
Route::GET('/majalaheksternal/delete/{id}',[AdminController::class, 'deleteMajalaheksternal'])->name('delete.majalaheksternal')->middleware('auth');

Route::GET('/prosiding',[AdminController::class, 'prosiding'])->name('prosiding')->middleware('auth');
Route::POST('/prosiding',[AdminController::class, 'createProsiding'])->name('add.prosiding')->middleware('auth');
Route::GET('/prosiding/edit/{id}',[AdminController::class, 'editProsiding'])->name('edit.prosiding')->middleware('auth');
Route::GET('/prosiding/delete/{id}',[AdminController::class, 'deleteProsiding'])->name('delete.prosiding')->middleware('auth');

Route::GET('/tugas_akhir',[AdminController::class, 'tugas_akhir'])->name('tugas_akhir')->middleware('auth');
Route::POST('/tugas_akhir',[AdminController::class, 'createTugasAkhir'])->name('add.tugas_akhir')->middleware('auth');
Route::GET('/tugas_akhir/edit/{id}',[AdminController::class, 'editTugasAkhir'])->name('edit.tugas_akhir')->middleware('auth');
Route::GET('/tugas_akhir/delete/{id}',[AdminController::class, 'deleteTugasAkhir'])->name('delete.tugas_akhir')->middleware('auth');









