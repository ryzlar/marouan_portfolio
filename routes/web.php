<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');

Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('project.update');

Route::delete('/dashboard', [ProjectController::class, 'destroy'])->name('contact.destroy');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/api/projects', [ProjectController::class, 'api'])->name('api.projects');

Route::get('/', function () {
    return view('profile.homepage');
});

Route::get('/contact', function () {
    return view('profile.contact');
});



//Route::get('/login', function () {
//    return view('auth.login');
//});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
