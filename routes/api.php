<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\Notification;
use App\Models\Business;
use Illuminate\Support\Facades\Http;

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

Route::get('/business_fr', function () {
    $businesses = Business::from('businesses_fr')->get();
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
            return response()->json(['error' => $validator->errors(), 'business_id' => $business->id], 400);
        }

        $validatedBusiness = $validator->validated();
        $validatedBusiness['subcategory_name'] = $business->subcategory->name;
        $validatedBusiness['category_name'] = $business->subcategory->category->name;

        $validatedBusiness['image'] = url('storage/' . $business->image);
        $validatedBusiness['logo'] = url('storage/' . $business->logo);

        $validatedBusinesses[] = $validatedBusiness;
    }

    return response()->json($validatedBusinesses, 200);
});

Route::get('/business_ar', function () {
    $businesses = Business::from('businesses_ar')->get();
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
            return response()->json(['error' => $validator->errors(), 'business_id' => $business->id], 400);
        }

        $validatedBusiness = $validator->validated();
        $validatedBusiness['subcategory_name'] = $business->subcategory->name;
        $validatedBusiness['category_name'] = $business->subcategory->category->name;

        $validatedBusiness['image'] = url('storage/' . $business->image);
        $validatedBusiness['logo'] = url('storage/' . $business->logo);

        $validatedBusinesses[] = $validatedBusiness;
    }

    return response()->json($validatedBusinesses, 200);
});

//Route::post('/list_trains_gares', function (Request $request) {
//    // The request body in JSON format
//    $payload = [
//        'token' => 'h0y06ecuky6m3v126yshlly5',
//        'id_gare_depart' => $request->input('id_gare_depart', '37'), // Default: 37
//        'id_gare_arrive' => $request->input('id_gare_arrive', '560'), // Default: 560
//        'datetime' => $request->input('datetime', '2024-09-12 17:00:00'), // Default: 2024-09-12 17:00:00
//        'post_24_hours' => $request->input('post_24_hours', '24h'), // Default: 24h
//    ];
//
//    // Make the POST request
//    $response = Http::post('https://www.sntf.dz/index.php?option=com_sntf&task=list_trains_gares', $payload);
//
//    // Handle the response from the external API
//    if ($response->successful()) {
//        return response()->json($response->json());
//    }
//
//    return response()->json(['error' => 'Unable to retrieve train data'], $response->status());
//});

Route::post('/list_trains_gares', function (Request $request) {
    // Validate incoming request data
    $request->validate([
        'id_gare_depart' => 'required|integer',
        'id_gare_arrive' => 'required|integer',
        'datetime' => 'required|date_format:Y-m-d H:i:s',
    ]);

    // Build the request body for the external API
    $payload = [
        'token' => 'h0y06ecuky6m3v126yshlly5', // Static token
        'id_gare_depart' => $request->input('id_gare_depart'),
        'id_gare_arrive' => $request->input('id_gare_arrive'),
        'datetime' => $request->input('datetime'),
        'post_24_hours' => '24h', // Static value
    ];

    // Make the POST request to the external API
    $response = Http::post('https://www.sntf.dz/index.php?option=com_sntf&task=list_trains_gares', $payload);

    // Handle the response
    if ($response->successful()) {
        return response()->json($response->json());
    }

    return response()->json(['error' => 'Unable to retrieve train data'], $response->status());
});

