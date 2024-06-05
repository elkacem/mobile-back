<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Notification;
use App\Models\Business;

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

Route::get('/business', function () {
    $businesses = Business::all();
    return $businesses;
});
