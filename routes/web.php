<?php

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//projects 

Route::get('/allProjects',[ProjectController::class ,'index'])->name('project.index');
Route::get('/createProject',[ProjectController::class ,'createPage'])->name('project.create.page');
Route::post('/createProject',[ProjectController::class ,'store'])->name('project.store');
Route::delete('/createProject/{id}',[ProjectController::class ,'destroy'])->name('project.destroy');





//redirections

Route::get('/index',[redirectController::class,'index'])->name('frontend.index');
// Route::get('/services',[redirectController::class,'services'])->name('frontend.services');
// Route::get('/about',[redirectController::class,'about'])->name('frontend.about');


Route::get('/index-ar',[redirectController::class,'indexAR'])->name('frontend.index-ar');
// Route::get('/services-ar',[redirectController::class,'servicesAR'])->name('frontend.services-ar');
// Route::get('/about-ar',[redirectController::class,'aboutAR'])->name('frontend.about-ar');
