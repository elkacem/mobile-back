<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Notification;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/notifications', function () {
//    return Notification::all();
//});

Route::get('/notifications', function () {
    $notifications = Notification::where('status', 1)->get();
    return $notifications;
});
