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

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/vehicles', [VehicleController::class, 'index'
])->name('vehicles');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/vehicle_add', [VehicleController::class, 'create'
])->name('vehicle_create');

Route::middleware(['auth:sanctum', 'verified'])->post(
    '/vehicle_add', [VehicleController::class, 'store'
])->name('vehicle_store');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/vehicle_delete/{vehicle}', [VehicleController::class, 'destroy'
])->name('vehicle_delete');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/vehicle_edit/{vehicle}', [VehicleController::class, 'edit'
])->name('vehicle_edit');

Route::middleware(['auth:sanctum', 'verified'])->post(
    '/vehicle_update/{vehicle}', [VehicleController::class, 'update'
])->name('vehicle_update');
