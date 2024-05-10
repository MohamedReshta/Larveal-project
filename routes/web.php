<?php

use App\Http\Controllers\Studentcontroller;
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


Route::get('/liststudent', [Studentcontroller::class , 'Showlist'])->name('student.list');

Route::get('/addstudent', [Studentcontroller::class , 'addstudent']);

Route::post('/addstudent', [Studentcontroller::class , 'storestudent'])->name('student.store');

Route::get('/deletestudent/{id}', [Studentcontroller::class , 'deletestudent'])->name('student.delete');

Route::get('/updatestudent/{id}', [Studentcontroller::class , 'updatestudent'])->name('student.update');

Route::post('/editstudent/{id}', [Studentcontroller::class , 'editstudent'])->name('student.edit');




