<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_new_create_ctrlr;

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

Route::get('/', [user_new_create_ctrlr::class, 'index'])->name('newUsr.index');
Route::get('/create', [user_new_create_ctrlr::class, 'create'])->name('newUsr.create');
Route::post('/', [user_new_create_ctrlr::class, 'add'])->name('newUsr.add');
Route::get('/{user}/edit', [user_new_create_ctrlr::class, 'edit'])->name('newUsr.edit');
Route::post('/{user}/update', [user_new_create_ctrlr::class, 'update'])->name('newUsr.update'); 
Route::delete('/{user}/delete', [user_new_create_ctrlr::class, 'delete'])->name('newUsr.delete'); 
