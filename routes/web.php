<?php

use App\Jobs\SendEmail;
use App\Mail\WelcomeMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
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
Route::get('mailable', function () {
    $user = \App\Models\User::find(1);
//    Mail::to($user->email)->later(now()->addSecond(10), new WelcomeMail($user));

//    $details['email'] = 'clevelandmarcus@hotmail.co.uk';
//    $emailJob = (new SendEmail($details))->delay(Carbon::now()->addMinutes(5));
//    dispatch($emailJob);

});
