<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::middleware('api')->get('/test', function () {
    return response()->json(['message' => 'API fonctionne !']);
});

Route::apiResource('rapport', function () {
    echo "OK";  
});