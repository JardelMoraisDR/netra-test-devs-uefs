<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index');              // GET /api/users
    Route::post('/', 'store');            // POST /api/users
    Route::get('{user}', 'show');         // GET /api/users/{id}
    Route::put('{user}', 'update');       // PUT /api/users/{id}
    Route::delete('{user}', 'destroy');   // DELETE /api/users/{id}
});

// Route::get('/ping', fn () => ['pong' => true]);