<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// HOMEPAGE

Route::get('/', [HomeController::class, 'index'] )->name('home');

Route::get('/home', [HomeController::class, 'redirect'])->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('inicio');

Route::get('/servicios', [HomeController::class, 'servicios'] )->name('servicios');

Route::get('/especialistas', [HomeController::class, 'especialistas'] )->name('especialistas');

Route::get('/about', [HomeController::class, 'about'] )->name('about');

Route::get('/q&a', [HomeController::class, 'preguntasrespuestas'] )->name('q&a');

Route::get('/blog', [HomeController::class, 'blog'] )->name('blog');

Route::get('/especialistas', [HomeController::class, 'especialistas'] )->name('especialistas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    // App Usuarios ⬇⬇⬇

Route::get('/book-an-appointment', [PacientController::class, 'book'])->name('pacients.book')->middleware('auth');

Route::post('/upload_appointment', [PacientController::class, 'uploadappointment'])->middleware('auth');

Route::get('/myappointments', [PacientController::class, 'myappointments'])->name('pacients.appointments')->middleware('auth');

Route::get('/cancel_appoint/{id}', [PacientController::class, 'cancel_appoint'])->middleware('auth');

    // Admin Dashboard ⬇⬇⬇

Route::get('/adminhome', [AdminController::class, 'adminindex'])->name('adminhome')->middleware(['auth', 'can:admin']);

Route::get('/all_doctors', [AdminController::class, 'show_all_doctors'])->name('admin.all_doctors')->middleware(['auth', 'can:admin']);

Route::get('/update_doctor/{id}', [AdminController::class, 'update'])->middleware(['auth', 'can:admin']);

Route::get('/delete_doctor/{id}', [AdminController::class, 'delete'])->middleware(['auth', 'can:admin']);

Route::post('/edit_doctor/{id}',[AdminController::class,'edit'])->middleware(['auth', 'can:admin']);

Route::get('/add_new_doctor', [AdminController::class, 'add_new_doctor'])->name('add_new_doctor')->middleware(['auth', 'can:admin']);

Route::post('/upload_doctor', [AdminController::class, 'upload'])->middleware(['auth', 'can:admin']);

Route::get('/appointments', [AdminController::class, 'appointments'])->name('admin.appointments')->middleware(['auth', 'can:admin']);

Route::get('/approve_appointment/{id}', [AdminController::class, 'approve_appointment'])->middleware(['auth', 'can:admin']);

Route::get('/cancel_appointment/{id}', [AdminController::class, 'cancel_appointment'])->middleware(['auth', 'can:admin']);

require __DIR__.'/auth.php';
