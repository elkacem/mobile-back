
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

