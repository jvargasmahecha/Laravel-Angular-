<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::group([
    'prefix' => 'auth',
    'middleware' => 'api'
], function () {   
    
    Route::post('logout', [AuthController::class, 'logaut']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});


    Route::post('auth/login', [AuthController::class, 'login']);
    Route::post('auth/signup', [AuthController::class, 'signup']);

