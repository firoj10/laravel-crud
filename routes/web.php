<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[createController::class,'home'])->name('student.home');
Route::get('/student/create',[createController::class,'create'])->name('student.create');
Route::post('/student/store',[createController::class,'store'])->name('student.store');
Route::get('/student/edit/{id}',[createController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[createController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[createController::class,'delete'])->name('student.delete');
