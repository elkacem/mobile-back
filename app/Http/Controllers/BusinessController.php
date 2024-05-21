<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Business;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return view('business.list');

        $businesses = Business::with('subcategory.category')->get(); // Retrieve all businesses from the database
        return view('business.list', compact('businesses')); // Pass the businesses data to the view

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('business.add', compact('categories'));
//        $data['header_title'] = "Admin Add";
//        return view('business.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slogan' => 'required',
            'subcategory_id' => 'required',
//            'image' => 'nullable|image',
//            'logo' => 'nullable|image',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules for image
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules for logo
            'location' => 'nullable|string',
            'opening_time' => 'nullable|string',
            'working_days' => 'nullable|string',
            'contact' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

//        dd($validated);

        Business::create($validated);

        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Fetch the business record from the database
        $business = Business::with('subcategory.category')->findOrFail($id);

        // Fetch categories and subcategories for dropdowns
        $categories = Category::all();
        $subcategories = Subcategory::all();

        // Pass data to the view
        return view('business.edit', compact('business', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $business = Business::findOrFail($id);

        // Check if the request has a file before validating
        if ($request->hasFile('image') || $request->hasFile('logo')) {
            // Validate the request data if image or logo is present
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'slogan' => 'required|string|max:255',
                'subcategory_id' => 'required|exists:subcategories,id',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'location' => 'nullable|string|max:255',
                'opening_time' => 'nullable|string|max:255',
                'working_days' => 'nullable|string|max:255',
                'contact' => 'nullable|string|max:255',
                'description' => 'nullable|string',
            ]);
        } else {
            // If no file is present, validate without image and logo fields
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'slogan' => 'required|string|max:255',
                'subcategory_id' => 'required|exists:subcategories,id',
                'location' => 'nullable|string|max:255',
                'opening_time' => 'nullable|string|max:255',
                'working_days' => 'nullable|string|max:255',
                'contact' => 'nullable|string|max:255',
                'description' => 'nullable|string',
            ]);
        }

//        dd($request->image);

        if ($request->hasFile('image')) {
            if ($business->image) {
                Storage::disk('public')->delete('images/'.$business->image);
            }
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('logo')) {
            if ($business->logo) {
                Storage::disk('public')->delete('logos/'.$business->logo);
            }
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $filtered = array_filter($validated, function ($value) {
            return !is_null($value);
        });

        $business->update($filtered);
//        $business->update($validated);

        return redirect()->route('list')->with('success', 'Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $business = Business::with('subcategory.category')->findOrFail($id);
        // Delete the business record from the database
        $business->delete();

        return redirect()->route('list')->with('success', 'Business deleted with sucess!');
    }

    public function getSubcategories($category_id)
    {
        $subcategories = Subcategory::where('category_id', $category_id)->get();

        return response()->json($subcategories);
    }
}
