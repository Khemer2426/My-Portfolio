<?php

use App\Http\Controllers\AnonymizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoubleRecordController;
use App\Http\Controllers\LeavesTerminationController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvisionController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewSchoolController;

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/vercel-health', function () {
    return response('ok', 200);
});

Route::get('/', function () {
    return view('portfolio');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::group(['middleware' => ['auth', '2fa']], function () {
    Route::post('2fa', function() {
        return redirect()->intended();
    })->name('2fa');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/password', [ProfileController::class, 'password'])->name('profile.password');
        Route::post('/password', [ProfileController::class, 'changePassword'])->name('profile.change.password');
        
        Route::patch('/profile/tfa-generate', [ProfileController::class, 'generateTFA'])->name('profile.tfa.generate');
        Route::patch('/profile/enable-tfa/{secret_key}', [ProfileController::class, 'enableTFA'])->name('profile.enable.tfa');
        Route::patch('/profile/disable-tfa', [ProfileController::class, 'disableTFA'])->name('profile.disable.tfa');
    });

    Route::name('admin.')->group(function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['prefix' => 'users'], function () {
                Route::get('/', [UserController::class, 'index'])->name('users');
                Route::post('/', [UserController::class, 'store'])->name('users.store');
                Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
                Route::post('/{id}/edit', [UserController::class, 'update'])->name('users.update');
                Route::delete('/{id}/delete', [UserController::class, 'destroy'])->name('users.delete');
            });
        });
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
