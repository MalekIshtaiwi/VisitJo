@extends('admin.layouts.admin')

@section('title', 'Booking Details')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h3>{{ $customer->name }} Booking Details </h3>
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <a href="{{ route('customers.index') }}" class="btn w-100"
                                style="background-color: #793509; color: white;">
                                <i class="fas fa-chevron-left"></i>Back
                            </a>
                        </div>
                        <div class="col-md-8">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search anything..."
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit"
                                        id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <select class="form-select" name="" id="">
                                    <option value="">Newest to Old</option>
                                    <option value="">Old to Newest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="border: 1px solid #dddddd">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Service</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer->bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $booking->service->serviceCategory->type }}</td>
                                    <td>{{ $booking->service->serviceType->name }}</td>
                                    <td>{{ $booking->service->description }}</td>
                                    <td>{{ $booking->service->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
