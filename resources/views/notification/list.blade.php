
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
