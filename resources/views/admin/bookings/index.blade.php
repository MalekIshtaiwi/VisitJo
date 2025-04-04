@extends('admin.layouts.admin')

@section('title', 'Bookings')

@section('content')

    <div class="container mt-5 bg-light p-4 rounded">
        <div class="row justify-content-between mb-4">
            <div class="col-md-6">
                <h3 class="mb-0">Bookings</h3>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Booking Requests</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Service</th>
                            <th>Start Date</th>
                            <th>Seats</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->user->name ?? '—' }}</td>
                                <td>{{ $booking->service->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->service->start_datetime)->format('Y-m-d') }}</td>
                                <td>{{ $booking->quantity }}</td>
                                <td class="text-center">
                                    @if ($booking->status === 'confirmed')
                                        <span class="badge bg-success">Confirmed</span>
                                    @elseif ($booking->status === 'cancelled')
                                        <span class="badge bg-danger">Cancelled</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @endif
                                </td>
                                <td class="text-center d-flex justify-content-center">
                                    <form method="POST" action="{{ route('admin.bookings.approve', $booking->id) }}">
                                        @csrf
                                        <button class="btn btn-success btn-sm me-1"><i class="fa-solid fa-check"
                                                style="color: white;"></i></button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.bookings.reject', $booking->id) }}">
                                        @csrf
                                        <button class="btn btn-danger btn-sm"><i class="fa-solid fa-xmark"
                                                style="color: white;"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
