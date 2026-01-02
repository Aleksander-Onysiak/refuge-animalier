<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\FicheController;
use App\Http\Controllers\Auth\NotificationsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BeforeAdoptionController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

// Accueil
Route::get('/', [HomepageController::class, 'index'])->name('welcome.index');


// routes publiques (visiteur)
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animal.show');


Route::get('/adoption/{animal}', [AdoptionController::class, 'index'])->name('adoption.index');
Route::post('/adoption/{animal}', [AdoptionController::class, 'store'])->name('adoption.store');

Route::get('/before_adoption', [BeforeAdoptionController::class, 'index'])->name('before_adoption.index');


//auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');


//routes en temps que user logé (Elise et bénévoles)
Route::middleware('auth')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard.index');
    Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications.index');

    Route::get('/fiches', [FicheController::class, 'index'])->name('fiches.index');
    Route::get('/fiches/create', [FicheController::class, 'create'])->name('fiches.create');
    Route::post('/fiches', [FicheController::class, 'store'])->name('fiches.store');
    Route::get('/fiches/{animal}', [FicheController::class, 'show'])->name('fiche.show');

    Route::get('/fiches/{animal}/edit', [FicheController::class, 'edit'])->name('fiches.edit');
    Route::put('/fiches/{animal}', [FicheController::class, 'update'])->name('fiches.update');

    Route::get('/volunteers', [VolunteerController::class, 'index'])->name('volunteer.index');
    Route::get('/volunteers/create', [VolunteerController::class, 'create'])->name('volunteer.create');
    Route::post('/volunteers', [VolunteerController::class, 'store'])->name('volunteer.store');
});
