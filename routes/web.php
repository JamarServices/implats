<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendancesController;



Route::get('/', function () {
    return view('newattendance');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::get('add-blog-post-form', [RegistrationsController::class, 'index']);
//      ->name('newregister');
  Route::post('store-form', [AttendancesController::class, 'store']);
  Route::get('list', [AttendancesController::class, 'list']);
  Route::get('export', [AttendancesController::class, 'export'])->name('export');
  Route::post('import', [AttendancesController::class, 'import'])->name('import');

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::get('/view', [\App\Http\Controllers\ViewdbController::class, 'view'])
        ->name('view.index');

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'show'])
        ->name('profile');

    Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'removeDevice'])
        ->name('profile.device.delete');

    Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])
        ->name('users.index');

    Route::get('/user/create', [\App\Http\Controllers\UsersController::class, 'create'])
        ->name('users.create');

    Route::post('/user/store', [\App\Http\Controllers\UsersController::class, 'store'])
        ->name('users.store');

    Route::get('/user/{user}/edit', [\App\Http\Controllers\UsersController::class, 'edit'])
        ->name('users.edit');

    Route::put('/user/{user}/update', [\App\Http\Controllers\UsersController::class, 'update'])
        ->name('users.update');

    Route::get('/user/{user}/change-password', [\App\Http\Controllers\UsersController::class, 'changePassword'])
        ->name('users.change-password');

    Route::put('/user/{user}/update-password', [\App\Http\Controllers\UsersController::class, 'updatePassword'])
        ->name('users.update-password');

    Route::delete('/user/{user}/delete', [\App\Http\Controllers\UsersController::class, 'delete'])
        ->name('users.delete');

});
