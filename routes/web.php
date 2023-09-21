<?php
use App\Http\Controllers\sekolahcontroller; 
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function() {
    return view('welcome');
});

Route::get('/admin',function() {
    return view('admin');
});

Route::get('/tampilan', function() {
    return view('tampilan');
});

Route::get('/sekolahs',[sekolahcontroller::class, 'index']) ->name('sekolahs.index');

Route::get('/sekolahs/tambah',[sekolahcontroller::class, 'tambah']) ->name('sekolahs.tambah');

Route::post('/sekolahs',[sekolahcontroller::class, 'simpan']) ->name('sekolahs.simpan');

Route::get('/sekolahs/{id}/edit',[sekolahcontroller::class, 'edit']) ->name('sekolahs.edit');

Route::put('/sekolahs/{id}',[sekolahcontroller::class, 'update']) ->name('sekolahs.update');

Route::delete('/sekolahs/{id}',[sekolahcontroller::class, 'hapus']) ->name('sekolahs.hapus');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



