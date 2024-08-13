<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimeEntryController;
use App\Http\Controllers\ReportController;

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

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/time-entries', [TimeEntryController::class, 'index'])->name('time_entries.index');
Route::post('/time-entries', [TimeEntryController::class, 'store'])->name('time_entries.store');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
