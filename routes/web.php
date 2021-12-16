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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/person', [App\Http\Controllers\PersonController::class, 'index'])->name('person');
Route::post('/addPerson', [App\Http\Controllers\PersonController::class, 'add_person'])->name('addPerson');
Route::post('/editPerson', [App\Http\Controllers\PersonController::class, 'edit_person'])->name('editPerson');
