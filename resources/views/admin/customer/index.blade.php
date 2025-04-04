@extends('admin.layouts.admin')

@section('title', 'Customers')

@section('content')
    <div class="container mt-5 bg-light p-4 rounded">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-between mb-4">
            <div class="col-md-6">
                <h3 class="mb-0">Customers</h3>
            </div>
            <div class="col-md-6 text-md-end">
                {{-- You can add an "Add Customer" button here if needed --}}
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header" style="background-color: #793509; color: white;">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search anything..."
                                    aria-describedby="button-addon2">
                                <button class="btn btn-outline-light" type="submit" id="button-addon2">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 mt-3 mt-md-0">
                        <select class="form-select" name="" id="">
                            <option value="">Newest to Old</option>
                            <option value="">Old to Newest</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>#Bookings</th>
                            <th>Address</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $customer->name ?? '—' }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->bookings?->count() ?? 0 }}</td>
                                <td>{{ $customer->address }}</td>
                                <td class="text-center">
                                    <a href="{{ route('customers.show', $customer->id) }}"
                                        class="text-dark d-inline-flex justify-content-center align-items-center">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No customers found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
