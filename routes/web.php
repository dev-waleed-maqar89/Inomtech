<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\redirectController;

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

Route::get('/', [redirectController::class, 'index'])->name('index');
// Language switching

Route::get('/lang/{lang}', [redirectController::class, 'switchLang'])->name('switchLang');
Route::get('/services/{service}', [redirectController::class, 'showService'])->name('department.show');

//
// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//projects

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/allProjects', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/createProject', [ProjectController::class, 'create'])->name('project.create.page');
    Route::post('/createProject', [ProjectController::class, 'store'])->name('project.store');
    Route::delete('/createProject/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');

    // Departments
    Route::get('/alldepartments', [DepartmentController::class, 'index'])->name('department.index');
    Route::get('/createdepartment', [DepartmentController::class, 'create'])->name('department.create.page');
    Route::post('/createdepartment', [DepartmentController::class, 'store'])->name('department.store');
});
