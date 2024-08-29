

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


