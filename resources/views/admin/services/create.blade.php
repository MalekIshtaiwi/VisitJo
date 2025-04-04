@extends('admin.layouts.admin')

@push('extraStyle')
    <style>
        .card-header {
            background-color: #793509;
        }
    </style>
@endpush

@section('content')
    <div class="container py-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="mb-4">Add New Trip / Event</h3>

        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0" style="color: white">Service Information</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="category_name" class="form-label">Category Type</label>
                            <select class="form-select" id="category_name" name="category_name" required>
                                <option value="">Select Type</option>
                                @foreach ($categories->unique('name') as $category)
                                    <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="serviceType" class="form-label">Service Type</label>
                            <select class="form-select" id="serviceType" name="service_type_id" required>
                                <option value="">Select a Type</option>
                                @foreach ($types->unique('name') as $type)
                                    <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Trip to Petra" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"
                                  placeholder="Write a short description..." required></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="start" class="form-label">Start Date & Time</label>
                            <input type="datetime-local" class="form-control" id="start" name="start_datetime" required>
                        </div>
                        <div class="col-md-6">
                            <label for="end" class="form-label">End Date & Time</label>
                            <input type="datetime-local" class="form-control" id="end" name="end_datetime" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price ($)</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        </div>
                        <div class="col-md-6">
                            <label for="seats" class="form-label">Available Seats</label>
                            <input type="number" class="form-control" id="seats" name="total_available_seats" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required />
                    </div>

                    <div class="mb-4">
                        <label for="image_path" class="form-label">Image (optional)</label>
                        <input type="file" name="image_path" id="image_path" class="form-control">
                    </div>

                    <button type="submit" class="btn w-100 mt-4" style="background-color: #793509; color: white;">
                        Submit Service
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
