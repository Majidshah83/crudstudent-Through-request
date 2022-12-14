<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
Route::get('index',[StudentController::class,'index'])->name('index');
Route::post('store',[StudentController::class,'storeStudent'])->name('store');
Route::get('editStudent/{id}',[StudentController::class,'editStudent'])->name('editStudent');
Route::get('deleteStudent',[StudentController::class,'deleteStudent'])->name('deleteStudent');
Route::post('updateStudent',[StudentController::class,'updateStudent'])->name('updateStudent');