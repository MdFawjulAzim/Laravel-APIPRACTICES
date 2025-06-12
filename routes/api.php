<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function () {
    return ['name' => "anilsidhu", 'channel' => "Code by step by step"];
});


Route::get("student", [StudentController::class, "list"])->name("student");
