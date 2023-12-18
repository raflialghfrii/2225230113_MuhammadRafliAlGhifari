<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController; 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/namaketuakelas', [EmployeeController::class, 'index'])->name('namaketuakelas');

Route::get('/tambahnamaketuakelas', [EmployeeController::class, 'tambahnamaketuakelas'])->name('tambahnamaketuakelas');
Route::post('/tambahdata', [EmployeeController::class, 'tambahdata'])->name('tamabhdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');


Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');