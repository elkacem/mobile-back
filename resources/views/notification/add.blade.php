{{-- @extends('layouts.app')--}}

{{--    @section('content')--}}
{{--        <div class="main-content">--}}
{{--            <div class="page-content">--}}
{{--                <div class="container-fluid">--}}
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                @endif--}}

{{--                <!-- start page title -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                                <h4 class="mb-sm-0">Add new Business</h4>--}}
{{--                                <div class="page-title-right">--}}
{{--                                    <ol class="breadcrumb m-0">--}}
{{--                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>--}}
{{--                                        <li class="breadcrumb-item active">Form Validation</li>--}}
{{--                                    </ol>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end page title -->--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-xl-12">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--    --}}{{----}}{{--                                <form method="post" action="{{ route('store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>--}}
{{--                                    <form method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>--}}
{{--                                        @csrf--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Name</label>--}}
{{--                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Slogan</label>--}}
{{--                                                    <input type="text" class="form-control" name="slogan" value="{{ old('slogan') }}" required>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Category</label>--}}
{{--                                                    <select class="form-select" name="category_id" id="category_id" required>--}}
{{--                                                        <option value="">Select Category</option>--}}
{{--                                                        @foreach($categories as $category)--}}
{{--                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Subcategory</label>--}}
{{--                                                    <select class="form-select" name="subcategory_id" id="subcategory_id" required>--}}
{{--                                                        <option value="">Select Subcategory</option>--}}
{{--                                                        <!-- Subcategories will be populated via JavaScript based on the selected category -->--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Image</label>--}}
{{--                                                    <input type="file" class="form-control" name="image">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Logo</label>--}}
{{--                                                    <input type="file" class="form-control" name="logo">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Location</label>--}}
{{--                                                    <input type="text" class="form-control" name="location" value="{{ old('location') }}">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Opening Time</label>--}}
{{--                                                    <input type="text" class="form-control" name="opening_time" value="{{ old('opening_time') }}">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Working Days</label>--}}
{{--                                                    <input type="text" class="form-control" name="working_days" value="{{ old('working_days') }}">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Contact</label>--}}
{{--                                                    <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Description</label>--}}
{{--                                            <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>--}}
{{--                                        </div>--}}

{{--                                        <div>--}}
{{--                                            <button class="btn btn-primary" type="submit">Add Business</button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- end card -->--}}
{{--                        </div> <!-- end col -->--}}
{{--                    </div>--}}
{{--                    <!-- end row -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endsection--}}

{{--    @section('scripts')--}}
{{--        <script>--}}
{{--            document.getElementById('category_id').addEventListener('change', function () {--}}
{{--                let categoryId = this.value;--}}
{{--                let subcategorySelect = document.getElementById('subcategory_id');--}}

{{--                // Clear previous options--}}
{{--                subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';--}}

{{--                // Fetch subcategories via AJAX--}}
{{--                fetch(`/subcategories/${categoryId}`)--}}
{{--                    .then(response => response.json())--}}
{{--                    .then(data => {--}}
{{--                        data.forEach(subcategory => {--}}
{{--                            let option = document.createElement('option');--}}
{{--                            option.value = subcategory.id;--}}
{{--                            option.text = subcategory.name;--}}
{{--                            subcategorySelect.appendChild(option);--}}
{{--                        });--}}
{{--                    });--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endsection--}}

{{--<!-- resources/views/notifications/create.blade.php -->--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <h4 class="mb-sm-0">Add Notification</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <form method="POST" action="{{ route('nstore') }}">--}}
{{--                                    @csrf--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Notification</label>--}}
{{--                                        <textarea class="form-control" name="notification" required>{{ old('notification') }}</textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Status</label>--}}
{{--                                        <input type="text" class="form-control" name="status" value="{{ old('status') }}" required>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-primary">Add Notification</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--@endsection--}}

<!-- resources/views/notifications/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-sm-0">Add Notification</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('nstore') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Notification</label>
                                        <textarea class="form-control" name="notification" required>{{ old('notification') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="status" required>
                                            <option value="0">Deactivated</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Notification</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

