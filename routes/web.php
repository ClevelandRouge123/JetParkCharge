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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/charging', function () {
    return Inertia\Inertia::render('Charging');
})->name('charging');

Route::middleware(['auth:sanctum', 'verified'])->get('/billing', function () {
    return Inertia\Inertia::render('Billing');
})->name('billing');

Route::middleware(['auth:sanctum', 'verified'])->get('/info', function () {
    return Inertia\Inertia::render('Info');
})->name('info');

Route::middleware(['auth:sanctum', 'verified'])->get('/management', function () {
    return Inertia\Inertia::render('Management');
})->name('management');
