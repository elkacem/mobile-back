<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
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

//Route::get('/business', function () {
//    $businesses = Business::all();
//    return $businesses;
//});

Route::get('/business', function () {
    $businesses = Business::all();
    $validatedBusinesses = [];

    foreach ($businesses as $business) {
        $validator = Validator::make($business->only([
            'id',
            'name',
            'slogan',
            'subcategory_id',
            'image',
            'logo',
            'location',
            'opening_time',
            'working_days',
            'contact',
            'description'
        ]), [
            'id' => 'required|integer',
            'name' => 'required|string',
            'slogan' => 'nullable|string',
            'subcategory_id' => 'required|integer',
            'image' => 'nullable|string',
            'logo' => 'nullable|string',
            'location' => 'nullable|string',
            'opening_time' => 'nullable|string',
            'working_days' => 'nullable|string',
            'contact' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            // Handle validation failure for individual business
            return response()->json(['error' => $validator->errors(), 'business_id' => $business->id], 400);
        }

        $validatedBusiness = $validator->validated();
        $validatedBusiness['subcategory_name'] = $business->subcategory->name;
        $validatedBusiness['category_name'] = $business->subcategory->category->name;

        // Ensure the image and logo URLs are complete
        $validatedBusiness['image'] = url('storage/' . $business->image);
        $validatedBusiness['logo'] = url('storage/' . $business->logo);

        $validatedBusinesses[] = $validatedBusiness;

//        $validatedBusinesses[] = $validator->validated();
    }

    return response()->json($validatedBusinesses, 200);
});




