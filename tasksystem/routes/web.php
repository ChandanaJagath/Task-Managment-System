<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\taskcontroller;

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

route::get('/tasks',[TaskController::class,'index'])->name('tasks.index');
route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');
route::get('/tasks/{task}',[TaskController::class,'edit'])->name('tasks.edit');
route::put('/tasks/{task}',[TaskController::class,'update'])->name('tasks.update');
route::delete('/tasks/{task}',[TaskController::class,'destroy'])->name('tasks.destroy');
route::post('/tasks/{task}/complete',[TaskController::class,'complete'])->name('tasks.complete');

