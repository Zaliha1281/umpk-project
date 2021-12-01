<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->middleware('auth');
Route::post('/todos/create', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'show']);
Route::get('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'update']);
Route::get('/todos/{todo}/delete', [App\Http\Controllers\TodoController::class, 'delete']);
Route::get('/todos/{todo}/force-delete', [App\Http\Controller\TodoController::class, 'forceDelete']);


Route::get('/ejen/senarai-permohonan', [App\Http\Controllers\ejen\PermohonanController::class, 'index']);
Route::get('/ejen/cipta-permohonan/create', [App\Http\Controllers\ejen\PermohonanController::class, 'create'])->middleware('auth');;
Route::post('/ejen/cipta-permohonan/create', [App\Http\Controllers\ejen\PermohonanController::class, 'store']);


Route::get('/lp/senarai-permohonan', [App\Http\Controllers\LP\PermohonanController::class, 'index']);
Route::get('/lp/cipta-permohonan', [App\Http\Controllers\LP\PermohonanController::class, 'create'])->middleware('auth');;
Route::post('/lp/cipta-permohonan', [App\Http\Controllers\LP\PermohonanController::class, 'store']);

//route untuk kategori permohonan
Route::get('/lp/senarai-kategori-permohonan', [App\Http\Controllers\LP\KategoriPermohonan::class, 'index']);
Route::get('/lp/cipta-kategori-permohonan', [App\Http\Controllers\LP\KategoriPermohonan::class, 'create'])->middleware('auth');
Route::post('/lp/cipta-kategori-permohonan', [App\Http\Controllers\LP\KategoriPermohonan::class, 'store']);
Route::get('/lp/senarai-kategori-permohonan/{kategoripermohonan}', [App\Http\Controllers\LP\KategoriPermohonan::class, 'show']);
Route::get('/lp/kemaskini-kategori-permohonan/{kategoripermohonan}/edit', [App\Http\Controllers\LP\KategoriPermohonan::class, 'edit']);
Route::post('/lp/kemaskini-kategori-permohonan/{kategoripermohonan}/edit', [App\Http\Controllers\LP\KategoriPermohonan::class, 'update']);
Route::get('/lp/padam-kategori-permohonan/{kategoripermohonan}/delete', [App\Http\Controllers\LP\KategoriPermohonan::class, 'delete']);
Route::get('/lp/padam-kategori-permohonan/{kategoripermohonan}/force-delete', [App\Http\Controller\LP\KategoriPermohonan::class, 'forceDelete']);


//route untuk pengalaman ejen
Route::get('/lp/senarai-pengalaman-ejen', [App\Http\Controllers\LP\PengalamanEjen::class, 'index']);
Route::get('/lp/cipta-pengalaman-ejen', [App\Http\Controllers\LP\PengalamanEjen::class, 'create'])->middleware('auth');
Route::post('/lp/cipta-pengalaman-ejen', [App\Http\Controllers\LP\PengalamanEjen::class, 'store']);
Route::get('/lp/senarai-pengalaman-ejen/{pengalaman-ejen}', [App\Http\Controllers\LP\PengalamanEjen::class, 'show']);
Route::get('/lp/kemaskini-pengalaman-ejen/{pengalaman-ejen}/edit', [App\Http\Controllers\LP\PengalamanEjen::class, 'edit']);
Route::post('/lp/kemaskini-pengalaman-ejen/{pengalaman-ejen}/edit', [App\Http\Controllers\LP\PengalamanEjen::class, 'update']);
Route::get('/lp/padam-pengalaman-ejen/{pengalaman-ejen}/delete', [App\Http\Controllers\LP\PengalamanEjen::class, 'delete']);
Route::get('/lp/padam-pengalaman-ejen/{pengalaman-ejen}/force-delete', [App\Http\Controller\LP\PengalamanEjen::class, 'forceDelete']);
