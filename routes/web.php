<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Index;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Index::class, 'index'])->name('index');
Route::post('/', [Index::class, 'index'])->name('index-filter');
Route::get('/create', [Index::class, 'create'])->name('create');
Route::post('/store', [Index::class, 'store'])->name('store');
Route::get('/edit/{albumId}', [Index::class, 'edit'])->name('edit');
Route::post('/update', [Index::class, 'update'])->name('update');
