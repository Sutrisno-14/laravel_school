<?php

use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::controller(StudentsController::class)->group(function () {
    Route::get('/student', 'index')->name('index');
    Route::get('/formAddStudent', 'formAddStudent')->name('formAddStudent');
    Route::post('/addStudent', 'addStudent')->name('addStudent');
    Route::get('/formUpdate/{id}', 'formUpdate')->name('formUpdate');
    Route::post('/updateStudent/{id}', 'updateStudent')->name('updateStudent');
    Route::get('/deleteStudent/{id}', 'deleteStudent')->name('deleteStudent');
});
