<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
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
    return view('auth.login');
})->name('welcome');

// Ensure authenticated user
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //  Dashboard
    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');

    //  Charging
    Route::get('/charging', function () {
        return Inertia\Inertia::render('Charging');
    })->name('charging');

    //  Billing
    Route::get('/billing', function () {
        return Inertia\Inertia::render('Billing');
    })->name('billing');

    //  Info
    Route::get('/info', function () {
        return Inertia\Inertia::render('Info');
    })->name('info');

    //  Vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');

    // Vehicle Model Resource
    Route::resource('vehicle', VehicleController::class);

});
