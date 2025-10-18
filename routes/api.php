<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;

Route::get('/test', function () {
    return response()->json(['message' => 'API working']);
});

Route::prefix('users')->group(function (){ 
    Route::get('/', [UserController::class, 'getUsers']);
});
