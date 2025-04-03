<x-layout>
    <x-slot name="bookings_css">
        <style>
            .card {
                margin-bottom: 20px;
                border: none;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            .summary-title {
                color: var(--primary);
                font-weight: 600;
                margin-bottom: 20px;
            }

            .booking-item {
                border-left: 4px solid var(--primary);
                padding: 15px;
                background-color: white;
                margin-bottom: 15px;
            }

            .booking-title {
                color: var(--primary);
                font-weight: 600;
                margin-bottom: 10px;
            }

            .booking-info {
                color: #555;
                font-size: 0.9rem;
                margin-bottom: 5px;
            }

            .booking-info i {
                width: 20px;
                color: var(--secondary);
            }

            .price {
                font-weight: bold;
                color: var(--primary);
                text-align: right;
            }

            .price-details {
                font-size: 0.8rem;
                color: #777;
                text-align: right;
            }

            .btn-primary {
                background-color: var(--primary);
                border-color: var(--primary);
            }

            .btn-primary:hover {
                background-color: var(--primary-dark);
                border-color: var(--primary-dark);
            }
        </style>
    </x-slot>

    <div class="container my-5">
        <h3 class="summary-title">Current Bookings Summary</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($pendingBookings->count() > 0)
        @foreach($pendingBookings as $booking)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="booking-title">{{ $booking->service->name }}</h5>
                        @if($booking->service->start_datetime && $booking->service->end_datetime)
                            <p class="booking-info">
                                <i class="far fa-calendar-alt"></i>
                                Check-in: {{ \Carbon\Carbon::parse($booking->service->start_datetime)->format('M d, Y') }}
                            </p>
                            <p class="booking-info">
                                <i class="far fa-calendar-check"></i>
                                Check-out: {{ \Carbon\Carbon::parse($booking->service->end_datetime)->format('M d, Y') }}
                            </p>
                        @endif
                        <p class="booking-info">
                            <i class="fas fa-user-friends"></i>
                            Quantity: {{ $booking->quantity }}
                        </p>
                        <p class="booking-info">
                            <i class="fas fa-info-circle"></i>
                            {{ Str::limit($booking->service->description, 100) }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="price">${{ number_format($booking->price_at_booking, 2) }}</div>
                        <div class="price-details">
                            @if($booking->service->service_type_id == 1)
                                per person
                            @elseif($booking->service->service_type_id == 2)
                                per night
                            @else
                                per booking
                            @endif
                        </div>
                        <div class="price mt-2">
                            ${{ number_format($booking->price_at_booking * $booking->quantity, 2) }}
                        </div>
                        <div class="price-details">total for this item</div>

                        <!-- Add this delete button -->
                        <div class="mt-3 text-right">
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this item from your cart?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="mb-1">Subtotal</p>
                            <p class="mb-1">Taxes & Fees (12%)</p>
                            <p class="font-weight-bold mt-3">Total</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p class="mb-1">${{ number_format($subtotal, 2) }}</p>
                            <p class="mb-1">${{ number_format($taxAmount, 2) }}</p>
                            <p class="font-weight-bold mt-3">${{ number_format($total, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary px-4">
                    Proceed to Checkout <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        @else
            <div class="alert alert-info">
                You don't have any pending bookings. <a href="{{ route('services-home') }}">Browse services</a> to book something!
            </div>
        @endif
    </div>
</x-layout>
