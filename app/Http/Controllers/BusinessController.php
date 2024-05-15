<?php

namespace App\Http\Controllers;

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

//    public function update(Request $request, Business $id)
//    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'slogan' => 'required|string|max:255',
//            'category_id' => 'required|exists:categories,id',
//            'subcategory_id' => 'required|exists:subcategories,id',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'location' => 'required|string|max:255',
//            'opening_time' => 'required|string|max:255',
//            'working_days' => 'required|string|max:255',
//            'contact' => 'required|string|max:255',
//            'description' => 'nullable|string',
//        ]);
//
//        if ($request->hasFile('image')) {
//            // Handle image upload
//            $imagePath = $request->file('image')->store('public/images');
//            $id->image = str_replace('public/', '', $imagePath);
//        }
//
//        if ($request->hasFile('logo')) {
//            // Handle logo upload
//            $logoPath = $request->file('logo')->store('public/logos');
//            $id->logo = str_replace('public/', '', $logoPath);
//        }
//
//        $id->update($request->except(['_token', '_method', 'image', 'logo']));
//
//        return redirect()->route('list')->with('success', 'Business updated successfully');
//    }

//    public function update(Request $request, Business $business)
//    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'slogan' => 'required|string|max:255',
//            'category_id' => 'required|exists:categories,id',
//            'subcategory_id' => 'required|exists:subcategories,id',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'location' => 'required|string|max:255',
//            'opening_time' => 'required|string|max:255',
//            'working_days' => 'required|string|max:255',
//            'contact' => 'required|string|max:255',
//            'description' => 'nullable|string',
//        ]);
//
//        // Update business details
//        $business->name = $request->name;
//        $business->slogan = $request->slogan;
////        $business->category_id = $request->category_id;
//        $business->subcategory_id = $request->subcategory_id;
//        $business->location = $request->location;
//        $business->opening_time = $request->opening_time;
//        $business->working_days = $request->working_days;
//        $business->contact = $request->contact;
//        $business->description = $request->description;
//
//        // Handle image upload
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/images');
//            $business->image = str_replace('public/', '', $imagePath);
//        }
//
//        // Handle logo upload
//        if ($request->hasFile('logo')) {
//            $logoPath = $request->file('logo')->store('public/logos');
//            $business->logo = str_replace('public/', '', $logoPath);
//        }
//
////        dd($business);
//        // Save changes
//        $business->save();
//
//        return redirect()->route('list')->with('success', 'Business updated successfully');
//    }

    public function update(Request $request, $id)
    {
//        dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'subcategory_id' => 'required|exists:subcategories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string|max:255',
            'opening_time' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $business = Business::findOrFail($id);

        // Update business details
        $business->name = $request->name;
        $business->slogan = $request->slogan;
        $business->subcategory_id = $request->subcategory_id; // Assuming you only have a subcategory

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            dd($imagePath);
            $business->image = str_replace('public/', '', $imagePath);
        }

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $business->logo = str_replace('public/', '', $logoPath);
        }

        $business->location = $request->location;
        $business->opening_time = $request->opening_time;
        $business->working_days = $request->working_days;
        $business->contact = $request->contact;
        $business->description = $request->description;

        // Save changes
        $business->save();

        return redirect()->route('list')->with('success', 'Business updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }

    public function getSubcategories($category_id)
    {
        $subcategories = Subcategory::where('category_id', $category_id)->get();

        return response()->json($subcategories);
    }
}
