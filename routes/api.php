<?php

use App\Http\Controllers\Api\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/buku', [BukuController::class, 'index']);

Route::get('test', function() {
    return response()->json(['message' => 'API works!']);
});

Route::get('/buku', 'App\Http\Controllers\Api\BukuController@index');