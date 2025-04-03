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
        <h3 class="summary-title">My Wishlist</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($services->count() > 0)
            @foreach($services as $service)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="booking-title">{{ $service->name }}</h5>
                                <p class="booking-info"><i class="far fa-list-alt"></i> {{ $service->serviceCategory->name ?? 'No Category' }}</p>
                                <p class="booking-info"><i class="far fa-clock"></i>
                                    @if($service->start_datetime && $service->end_datetime)
                                        {{ \Carbon\Carbon::parse($service->start_datetime)->format('M d, Y') }} -
                                        {{ \Carbon\Carbon::parse($service->end_datetime)->format('M d, Y') }}
                                    @else
                                        Available anytime
                                    @endif
                                </p>
                                <p class="booking-info"><i class="fas fa-map-marker-alt"></i> {{ $service->location ?? 'Location not specified' }}</p>
                                <p class="booking-info"><i class="fas fa-info-circle"></i> {{ Str::limit($service->description, 100) }}</p>
                            </div>
                            <div class="col-md-4">
                                <div class="price">${{ number_format($service->price, 2) }}</div>
                                <div class="price-details">
                                    @if($service->service_type_id == 1)
                                        per person
                                    @elseif($service->service_type_id == 2)
                                        per night
                                    @else
                                        per booking
                                    @endif
                                </div>
                                <div class="mt-3 text-right">
                                    <a href="/services/show{{ $service->id }}" class="btn btn-primary btn-sm">
                                        Book Now
                                    </a>
                                    <form action="{{ route('wishlist.destroy', $service->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Remove from wishlist">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-4">
                <a href="{{ route('services-home') }}" class="btn btn-primary px-4">
                    Browse More Services <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        @else
            <div class="alert alert-info">
                Your wishlist is empty. <a href="{{ route('services-home') }}">Browse services</a> to add items to your wishlist.
            </div>
        @endif
    </div>
</x-layout>
