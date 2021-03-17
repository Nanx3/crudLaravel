<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

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

// List
Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');

// Creation
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');

Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');

// SHOW / UPDATE
// employees?id=1
// employees/1/edit
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');

Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');

// DELETE
Route::delete('/employees/{employee}', [EmployeeController::class, 'delete'])->name('employee.delete');
