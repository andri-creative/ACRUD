<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AndriController;

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


Route::get('/', [AndriController::class, 'index']);
Route::get('/tambah', [AndriController::class, 'add']);
Route::post('/post-nama', [AndriController::class, 'store']);

Route::put('/post-edit/{id}', [AndriController::class, 'update']);

Route::get('/edit/{id}', [AndriController::class, 'edit']);

Route::delete('/delete/{id}', [AndriController::class, 'destroy']);


Route::get('/text', function(){
    return view('/sidebar');
});