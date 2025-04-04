@extends('admin.layouts.admin')

@section('title', 'Services')

@section('content')
    <div class="container mt-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
            <h3 class="mb-0">All Services</h3>
            <a href="{{ route('services.create') }}" class="btn" style="background-color: #793509; color: white;">
                <i class="fas fa-plus"></i> Add Service
            </a>
        </div>

        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-header" style="background-color: #793509">
                            <h5 class="mb-0 text-white text-capitalize">{{ $category->name }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($category->services as $service)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $service->name }}</td>
                                                <td>{{ $service->serviceType->name ?? '-' }}</td>
                                                <td>{{ $service->location }}</td>
                                                <td>${{ number_format($service->price, 2) }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No services found for this category.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div> <!-- table-responsive -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
