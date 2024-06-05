{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}
{{--                @if (session('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ session('success') }}--}}
{{--                    </div>--}}
{{--            @endif--}}

{{--            <!-- start page title -->--}}
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
{{--                <!-- end page title -->--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}

{{--                                <h4 class="card-title" style="text-align: right"><a href="{{ route('add') }}" class="btn btn-primary"> Ajouter utilisateur </a></h4>--}}

{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-editable table-nowrap align-middle table-edits">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>Name</th>--}}
{{--                                            <th>Slogan</th>--}}
{{--                                            <th>Category</th>--}}
{{--                                            <th>Subcategory</th>--}}
{{--                                            <th>Image</th>--}}
{{--                                            <th>Logo</th>--}}
{{--                                            <th>Location</th>--}}
{{--                                            <th>Opening Time</th>--}}
{{--                                            <th>Working Days</th>--}}
{{--                                            <th>Contact</th>--}}
{{--                                            <th>Description</th>--}}
{{--                                            <th>Action</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        --}}{{----}}{{-- Loop through your business data here --}}
{{--                                        @foreach($businesses as $business)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{ $business->name }}</td>--}}
{{--                                                <td>{{ $business->slogan }}</td>--}}
{{--                                                <td>{{ $business->subcategory->category->name }}</td>--}}
{{--                                                <td>{{ $business->subcategory->name }}</td>--}}
{{--                                                <td><img src="{{ asset('storage/' . $business->image) }}" style="max-width: 100px; max-height: 100px;" alt="Image"></td>--}}
{{--                                                <td><img src="{{ asset('storage/' . $business->logo) }}" style="max-width: 100px; max-height: 100px;" alt="Image"></td>--}}
{{--                                                <td>{{ $business->location }}</td>--}}
{{--                                                <td>{{ $business->opening_time }}</td>--}}
{{--                                                <td>{{ $business->working_days }}</td>--}}
{{--                                                <td>{{ $business->contact }}</td>--}}
{{--                                                <td>{{ $business->description }}</td>--}}
{{--                                                <td>--}}
{{--                                                    --}}{{----}}{{-- Add action buttons here --}}
{{--                                                    <a href="{{ route('edit', $business->id) }}" class="btn btn-primary">Edit</a>--}}
{{--                                                    <a onclick="return confirm('Are you sure?')" href="{{ route('delete', $business->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div> <!-- end col -->--}}
{{--                </div> <!-- end row -->--}}
{{--            </div> <!-- container-fluid -->--}}
{{--        </div>--}}
{{--        <!-- End Page-content -->--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}

{{--                @if ($message = Session::get('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="row mb-4">--}}
{{--                    <div class="col-12">--}}
{{--                        <h4 class="mb-sm-0">Notifications</h4>--}}
{{--                        <a href="{{ route('nadd') }}" class="btn btn-primary float-end">Add Notification</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <table class="table table-bordered">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Body</th>--}}
{{--                                        <th>Status</th>--}}
{{--                                        <th>Actions</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach ($notifications as $notification)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $notification->notification }}</td>--}}
{{--                                            <td>{{ $notification->status }}</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="{{ route('nedit', $notification->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                                                <form action="{{ route('ndestroy', $notification->id) }}" method="POST" style="display:inline-block;">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}

{{--                @if ($message = Session::get('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="row mb-4">--}}
{{--                    <div class="col-12">--}}
{{--                        <h4 class="mb-sm-0">Notifications</h4>--}}
{{--                        <a href="{{ route('nadd') }}" class="btn btn-primary float-end">Add Notification</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <table class="table table-bordered">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Body</th>--}}
{{--                                        <th>Status</th>--}}
{{--                                        <th>Actions</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach ($notifications as $notification)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $notification->notification }}</td>--}}
{{--                                            <td>{{ $notification->status ? 'Active' : 'Deactivated' }}</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="{{ route('nedit', $notification->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                                                <form action="{{ route('ndestroy', $notification->id) }}" method="POST" style="display:inline-block;">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}

{{--                @if ($message = Session::get('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="row mb-4">--}}
{{--                    <div class="col-12">--}}
{{--                        <h4 class="mb-sm-0">Notifications</h4>--}}
{{--                        <a href="{{ route('nadd') }}" class="btn btn-primary float-end">Add Notification</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <table class="table table-bordered">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Body</th>--}}
{{--                                        <th>Status</th>--}}
{{--                                        <th>Actions</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach ($notifications as $notification)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $notification->notification }}</td>--}}
{{--                                            <td>--}}
{{--                                                <form action="{{ route('toggle', $notification->id) }}" method="POST" class="status-form">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('PATCH')--}}
{{--                                                    <select name="status" class="form-select status-select" data-id="{{ $notification->id }}">--}}
{{--                                                        <option value="1" {{ $notification->status ? 'selected' : '' }}>Active</option>--}}
{{--                                                        <option value="0" {{ !$notification->status ? 'selected' : '' }}>Deactivated</option>--}}
{{--                                                    </select>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="{{ route('nedit', $notification->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                                                <form action="{{ route('ndestroy', $notification->id) }}" method="POST" style="display:inline-block;">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
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
{{--        document.querySelectorAll('.status-select').forEach(select => {--}}
{{--            select.addEventListener('change', function () {--}}
{{--                let form = this.closest('.status-form');--}}
{{--                let formData = new FormData(form);--}}

{{--                console.log(formData);--}}
{{--                fetch(form.action, {--}}
{{--                    method: 'POST',--}}
{{--                    body: formData,--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')--}}
{{--                    }--}}
{{--                })--}}
{{--                    .then(response => response.json())--}}
{{--                    .then(data => {--}}
{{--                        if (data.success) {--}}
{{--                            alert('Status updated successfully.');--}}
{{--                        } else {--}}
{{--                            alert('Status update failed.');--}}
{{--                        }--}}
{{--                    })--}}
{{--                    .catch(error => console.error('Error:', error));--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <div class="row mb-4">
                    <div class="col-12">
                        <h4 class="mb-sm-0">Notifications</h4>
                        <a href="{{ route('nadd') }}" class="btn btn-primary float-end">Add Notification</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Body</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($notifications as $notification)
                                        <tr>
                                            <td>{{ $notification->notification }}</td>
                                            <td>
                                                <form action="{{ route('toggle', $notification->id) }}" method="POST"
                                                      class="status-form">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="status" class="form-select status-select"
                                                            data-id="{{ $notification->id }}">
                                                        <option value="1" {{ $notification->status ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option
                                                            value="0" {{ !$notification->status ? 'selected' : '' }}>
                                                            Deactivated
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('nedit', $notification->id) }}"
                                                   class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('ndestroy', $notification->id) }}" method="POST"
                                                      style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.status-select').forEach(select => {
            select.addEventListener('change', function () {
                if (confirm('Are you sure you want to change the status?')) {
                    let form = this.closest('.status-form');
                    let formData = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Status updated successfully.');

                                // Deactivate all other selects except the current one
                                document.querySelectorAll('.status-select').forEach(otherSelect => {
                                    if (otherSelect !== select) {
                                        otherSelect.value = '0';
                                    }
                                });
                            } else {
                                alert('Status update failed.');
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    // Reset the select value to its original state if the user cancels
                    this.value = this.dataset.originalValue;
                }
            });

            // Store the original value in a data attribute
            select.dataset.originalValue = select.value;
        });
    </script>
@endsection
