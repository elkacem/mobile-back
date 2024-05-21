{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                            <h4 class="mb-sm-0">Edit Business</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <form action="{{ route('update', $business->id) }}"  method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('PUT')--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label for="name" class="form-label">Name</label>--}}
{{--                                        <input type="text" class="form-control" id="name" name="name" value="{{ $business->name }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="slogan" class="form-label">Slogan</label>--}}
{{--                                        <input type="text" class="form-control" id="slogan" name="slogan" value="{{ $business->slogan }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="category_id" class="form-label">Category</label>--}}
{{--                                        <select class="form-select" id="category_id" name="category_id">--}}
{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{ $category->id }}" {{ $business->subcategory->category->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="subcategory_id" class="form-label">Subcategory</label>--}}
{{--                                        <select class="form-select" id="subcategory_id" name="subcategory_id">--}}
{{--                                            @foreach($subcategories as $subcategory)--}}
{{--                                                <option value="{{ $subcategory->id }}" {{ $business->subcategory->id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="image" class="form-label">Image</label>--}}
{{--                                        <input type="file" class="form-control" id="image" name="image">--}}
{{--                                        <img src="{{ asset('storage/' . $business->image) }}" alt="Image" style="max-width: 100px; max-height: 100px;">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="logo" class="form-label">Logo</label>--}}
{{--                                        <input type="file" class="form-control" id="logo" name="logo">--}}
{{--                                        <img src="{{ asset('storage/' . $business->logo) }}" alt="Logo" style="max-width: 100px; max-height: 100px;">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="location" class="form-label">Location</label>--}}
{{--                                        <input type="text" class="form-control" id="location" name="location" value="{{ $business->location }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="opening_time" class="form-label">Opening Time</label>--}}
{{--                                        <input type="text" class="form-control" id="opening_time" name="opening_time" value="{{ $business->opening_time }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="working_days" class="form-label">Working Days</label>--}}
{{--                                        <input type="text" class="form-control" id="working_days" name="working_days" value="{{ $business->working_days }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="contact" class="form-label">Contact</label>--}}
{{--                                        <input type="text" class="form-control" id="contact" name="contact" value="{{ $business->contact }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="description" class="form-label">Description</label>--}}
{{--                                        <textarea class="form-control" id="description" name="description">{{ $business->description }}</textarea>--}}
{{--                                    </div>--}}

{{--                                    <button type="submit" class="btn btn-primary">Update Business</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        document.getElementById('category_id').addEventListener('change', function () {--}}
{{--            let categoryId = this.value;--}}
{{--            let subcategorySelect = document.getElementById('subcategory_id');--}}

{{--            // Clear previous options--}}
{{--            subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';--}}

{{--            // Fetch subcategories via AJAX--}}
{{--            fetch(`/subcategories/${categoryId}`)--}}
{{--                .then(response => response.json())--}}
{{--                .then(data => {--}}
{{--                    data.forEach(subcategory => {--}}
{{--                        let option = document.createElement('option');--}}
{{--                        option.value = subcategory.id;--}}
{{--                        option.text = subcategory.name;--}}
{{--                        subcategorySelect.appendChild(option);--}}
{{--                    });--}}
{{--                });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                            <h4 class="mb-sm-0">Edit Business</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <form action="{{ route('update', $business->id) }}" method="POST" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    @method('PUT')--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="name" class="form-label">Name</label>--}}
{{--                                        <input type="text" class="form-control" id="name" name="name" value="{{ $business->name }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="slogan" class="form-label">Slogan</label>--}}
{{--                                        <input type="text" class="form-control" id="slogan" name="slogan" value="{{ $business->slogan }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="category_id" class="form-label">Category</label>--}}
{{--                                        <select class="form-select" id="category_id" name="category_id">--}}
{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{ $category->id }}" {{ $business->subcategory->category->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="subcategory_id" class="form-label">Subcategory</label>--}}
{{--                                        <select class="form-select" id="subcategory_id" name="subcategory_id">--}}
{{--                                            @foreach($subcategories as $subcategory)--}}
{{--                                                <option value="{{ $subcategory->id }}" {{ $business->subcategory->id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="image" class="form-label">Image</label>--}}
{{--                                        <input type="file" class="form-control" id="image" name="image">--}}
{{--                                        @if($business->image)--}}
{{--                                            <img src="{{ asset('storage/' . $business->image) }}" alt="Image" style="max-width: 100px; max-height: 100px;">--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="logo" class="form-label">Logo</label>--}}
{{--                                        <input type="file" class="form-control" id="logo" name="logo">--}}
{{--                                        @if($business->logo)--}}
{{--                                            <img src="{{ asset('storage/' . $business->logo) }}" alt="Logo" style="max-width: 100px; max-height: 100px;">--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="location" class="form-label">Location</label>--}}
{{--                                        <input type="text" class="form-control" id="location" name="location" value="{{ $business->location }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="opening_time" class="form-label">Opening Time</label>--}}
{{--                                        <input type="text" class="form-control" id="opening_time" name="opening_time" value="{{ $business->opening_time }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="working_days" class="form-label">Working Days</label>--}}
{{--                                        <input type="text" class="form-control" id="working_days" name="working_days" value="{{ $business->working_days }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="contact" class="form-label">Contact</label>--}}
{{--                                        <input type="text" class="form-control" id="contact" name="contact" value="{{ $business->contact }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="description" class="form-label">Description</label>--}}
{{--                                        <textarea class="form-control" id="description" name="description">{{ $business->description }}</textarea>--}}
{{--                                    </div>--}}

{{--                                    <button type="submit" class="btn btn-primary">Update Business</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        document.getElementById('category_id').addEventListener('change', function () {--}}
{{--            let categoryId = this.value;--}}
{{--            let subcategorySelect = document.getElementById('subcategory_id');--}}

{{--            // Clear previous options--}}
{{--            subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';--}}

{{--            // Fetch subcategories via AJAX--}}
{{--            fetch(`/subcategories/${categoryId}`)--}}
{{--                .then(response => response.json())--}}
{{--                .then(data => {--}}
{{--                    data.forEach(subcategory => {--}}
{{--                        let option = document.createElement('option');--}}
{{--                        option.value = subcategory.id;--}}
{{--                        option.text = subcategory.name;--}}
{{--                        subcategorySelect.appendChild(option);--}}
{{--                    });--}}
{{--                });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
{{--we--}}

{{--<!-- resources/views/notifications/edit.blade.php -->--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <h4 class="mb-sm-0">Edit Notification</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <form method="POST" action="{{ route('nupdate', $notification->id) }}">--}}
{{--                                    @csrf--}}
{{--                                    @method('PUT')--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Body</label>--}}
{{--                                        <textarea class="form-control" name="body" required>{{ $notification->notification }}</textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Status</label>--}}
{{--                                        <input type="text" class="form-control" name="status" value="{{ $notification->status }}" required>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-primary">Update Notification</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--@endsection--}}

<!-- resources/views/notifications/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-sm-0">Edit Notification</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('nupdate', $notification->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label class="form-label">Notification</label>
                                        <textarea class="form-control" name="notification" required>{{ $notification->notification }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="status" required>
                                            <option value="1" {{ $notification->status ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$notification->status ? 'selected' : '' }}>Deactivated</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Notification</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection


