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
//        $request->validate([
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
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = $file->storeAs('images', $filename, 'public');
            $validated['image'] = $path;
//            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = $file->storeAs('logos', $filename, 'public');
            $validated['logo'] = $path;

//            $validated['logo'] = $request->file('logo')->store('logos', 'public');
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
        $validated = $request->validate([
//        $request->validate([
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

        $business = Business::findOrFail($id);

//        dd("thtaa it ",$request->hasFile('image'));
//        // Handle image upload
        if ($request->has('image')) {
//        if ($request->file('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'image_' . time() . '.' . $extension;
            $path = $file->storeAs('images', $filename, 'public');
            $validated['image'] = $path;
            // Delete the old image if a new one is uploaded
            if ($business->image && Storage::disk('public')->exists($business->image)) {
                Storage::disk('public')->delete($business->image);
            }
        }

        // Handle logo upload
        if ($request->has('logo')) {
//        if ($request->file('logo')) {
            // Delete the old logo if a new one is uploaded
            if ($business->logo && Storage::disk('public')->exists($business->logo)) {
                Storage::disk('public')->delete($business->logo);
            }
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = 'logo_' . time() . '.' . $extension;
            $path = $file->storeAs('logos', $filename, 'public');
            $validated['logo'] = $path;
        }

//        dd($validated);

//        Business::create($validated);
        $business->update($validated);

        return redirect()->route('list');
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
