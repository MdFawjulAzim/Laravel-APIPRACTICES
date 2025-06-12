<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function () {
    return ['name' => "anilsidhu", 'channel' => "Code by step by step"];
});


Route::get("student", [StudentController::class, "list"])->name("student");

Route::Post("add-students", [StudentController::class, "addStudent"])->name("addStudent");

Route::put("update-students", [StudentController::class, "updateStudent"])->name("updateStudent");

Route::delete("delete-students/{id}", [StudentController::class, "deleteStudent"])->name("deleteStudent");

Route::resource("member", MemberController::class);


//user API Signup with Laravel sanctum

Route::post("login",[UserAuthController::class,"login"]);
Route::post("signup",[UserAuthController::class,"signUp"]);