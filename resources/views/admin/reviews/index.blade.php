@extends('admin.layouts.admin')

@push('extraStyle')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-header {
            background-color: #793509;
            color: white;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .rating-stars {
            color: #ffc107;
            font-size: 1rem;
        }

        .btn-sm {
            padding: 0.1rem 0.1rem;
            font-size: 0.875rem;
        }

        .pagination {
            justify-content: center;
            margin-top: 1rem;
        }

        .page-item.active .page-link {
            background-color: #793509 !important;
            border-color: #793509 !important;
            color: white;
        }

        .page-link {
            color: #793509 !important;
        }

        .page-link:hover {
            background-color: #f0e0d0;
            color: #793509 !important;
        }
    </style>
@endpush
@section('title', 'Reviews')

@section('content')
    <div class="container mt-5 bg-light p-4 rounded">
        <div class="row justify-content-between mb-4">
            <div class="col-md-6">
                <h3 class="mb-0">Customer Reviews</h3>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">All Reviews</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Service</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviews as $review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $review->user?->name ?? '—' }}</td>
                                <td>{{ $review->service?->name ?? '—' }}</td>
                                <td class="rating-stars">⭐⭐⭐⭐☆</td>
                                <td>{{ $review->comment }}</td>
                                <td>{{ $review->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    @if ($review->status === 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($review->status === 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @endif
                                </td>

                                <td class="text-center d-flex justify-content-center">
                                    <form action="{{ route('admin.reviews.approve', $review->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-success btn-sm me-1"><i class="fa-solid fa-check"
                                                style="color: #ffffff;"></i></button>
                                    </form>
                                    <form action="{{ route('admin.reviews.reject', $review->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger btn-sm me-1"><i class="fa-solid fa-xmark"
                                                style="color: #ffffff;"></i></button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No pending reviews.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $reviews->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
