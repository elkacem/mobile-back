@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
            @endif

            <!-- start page title -->
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                            <h4 class="mb-sm-0">Editable Table</h4>--}}

{{--                            <div class="page-title-right">--}}
{{--                                <ol class="breadcrumb m-0">--}}
{{--                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>--}}
{{--                                    <li class="breadcrumb-item active">Editable Table</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mb-sm-0">Business</h4>
                                <h4 class="card-title" style="text-align: right"><a href="{{ route('add') }}" class="btn btn-primary"> Add Business </a></h4>

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Slogan</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Image</th>
                                            <th>Logo</th>
                                            <th>Location</th>
                                            <th>Opening Time</th>
                                            <th>Working Days</th>
                                            <th>Contact</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{-- Loop through your business data here --}}
                                        @foreach($businesses as $business)
                                            <tr>
                                                <td>{{ $business->name }}</td>
                                                <td>{{ $business->slogan }}</td>
                                                <td>{{ $business->subcategory->category->name }}</td>
                                                <td>{{ $business->subcategory->name }}</td>
                                                <td><img src="{{ asset('storage/' . $business->image) }}" style="max-width: 100px; max-height: 100px;" alt="Image"></td>
                                                <td><img src="{{ asset('storage/' . $business->logo) }}" style="max-width: 100px; max-height: 100px;" alt="Image"></td>
                                                <td>{{ $business->location }}</td>
                                                <td>{{ $business->opening_time }}</td>
                                                <td>{{ $business->working_days }}</td>
                                                <td>{{ $business->contact }}</td>
                                                <td>{{ $business->description }}</td>
                                                <td>
                                                    {{-- Add action buttons here --}}
                                                    <a href="{{ route('edit', $business->id) }}" class="btn btn-primary">Edit</a>
                                                    <a onclick="return confirm('Are you sure?')" href="{{ route('delete', $business->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection

