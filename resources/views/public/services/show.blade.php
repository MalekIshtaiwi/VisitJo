<x:layout>
    <!-- Bootstrap 4 CSS -->
    <x-slot name="services_show_css">

        <link rel="stylesheet" href="css/services.css">
        <style>
            /* Original styles */
            .hero-section {
                position: relative;
                height: 50vh;
                background-image: url('/images/services_land_picture.jpg');
                background-size: cover;
                background-position: center;
                color: white;
                display: flex;
                align-items: center;
            }

            .hero-section::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.4);
            }

            /* All your original styles here */
            .service-show {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .main-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .resort-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 3px;
            }

            /* Add your new luxury resort component styles */
            :root {
                --primary: #92400b;
                --primary-dark: #793509;
                --secondary: #b85c38;
                --accent: #e09132;
            }

            .resort-container {
                background-color: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 15px rgba(0,0,0,0.05);
                margin: 30px auto;
            }

            .resort-title {
                color: var(--primary);
                font-weight: 600;
                font-size: 28px;
                margin-bottom: 5px;
            }

            .resort-location {
                color: #666;
                display: flex;
                align-items: center;
                font-size: 15px;
                margin-bottom: 20px;
            }

            .resort-location i {
                margin-right: 8px;
                color: #666;
            }

            .main-image {
                width: 100%;
                height: 280px;
                object-fit: cover;
                border-radius: 8px;
            }

            .thumbnail-container {
                display: flex;
                margin-top: 10px;
                gap: 10px;
            }

            .thumbnail {
                width: 100%;
                height: 130px;
                object-fit: cover;
                border-radius: 6px;
            }

            .booking-card {
                background-color: #FFF8F1;
                border-radius: 8px;
                padding: 25px;
                height: 100%;
            }

            .price {
                color: var(--primary);
                font-size: 32px;
                font-weight: 700;
                margin-bottom: 5px;
            }

            .per-night {
                color: #666;
                font-size: 14px;
                text-align: right;
            }

            .booking-detail {
                display: flex;
                align-items: center;
                margin: 25px 0;
            }

            .booking-detail i {
                color: var(--accent);
                font-size: 20px;
                width: 30px;
            }

            .booking-label {
                color: #666;
                font-size: 14px;
                margin-bottom: 3px;
            }

            .booking-value {
                font-weight: 600;
                font-size: 16px;
            }

            .booking-btn {
                background-color: var(--primary);
                color: white;
                border: none;
                border-radius: 6px;
                padding: 12px;
                font-weight: 500;
                width: 100%;
                transition: background-color 0.3s;
                margin-top: 10px;
            }

            .booking-btn:hover {
                background-color: var(--primary-dark);
            }

            @media (max-width: 768px) {
                .booking-card {
                    margin-top: 20px;
                }
            }
        </style>
    </x-slot name="services_show_css">


    <!-- Landing Section -->
    <div class="hero-section" style="display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="container hero-content">
            <h1 class="hero-title text-white">Discover Jordan's<br>Timeless Wonders</h1>
        </div>
    </div>
    <br><br>

    <!-- Luxury Resort Booking Component -->
    <div class="resort-container">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="resort-title">{{ $service->name }}</h1>
                    <div class="resort-location">
                        <i class="fas fa-map-marker-alt"></i> {{ $service->location ?? 'Jordan' }}
                    </div>


                        <img src="{{ asset('storage/' . $service->image_path) }}" alt="Luxury resort" class="main-image">


                    <div class="thumbnail-container">
                        <img src="https://picsum.photos/400/320" alt="Interior view" class="thumbnail">
                        <img src="https://picsum.photos/400/320" alt="Amenity view" class="thumbnail">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="booking-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="price">${{ number_format($service->price, 2) }}</div>
                            <div class="per-night">per person</div>
                        </div>

                        @if ($service->start_datetime && $service->end_datetime)
                        <div class="booking-detail">
                            <i class="far fa-calendar-alt"></i>
                            <div class="ml-3">
                                <div class="booking-label">Start Date</div>
                                <div class="booking-value">{{ date('d M Y', strtotime($service->start_datetime)) }}</div>
                            </div>
                        </div>

                        <div class="booking-detail">
                            <i class="far fa-calendar-check"></i>
                            <div class="ml-3">
                                <div class="booking-label">End Date</div>
                                <div class="booking-value">{{ date('d M Y', strtotime($service->end_datetime)) }}</div>
                            </div>
                        </div>
                        @endif

                        <div class="booking-detail">
                            <i class="fas fa-user-friends"></i>
                            <div class="ml-3">
                                <div class="booking-label">Available Spots</div>
                                <div class="booking-value">{{ $service->total_available_seats }} seats left</div>
                            </div>
                        </div>


                        <form action="{{ route('bookings.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            <div class="booking-detail">
                                <i class="fas fa-users"></i>
                                <div class="ml-3">
                                    <div class="booking-label">Quantity</div>
                                    <div class="booking-value">
                                        <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1"
                                               max="{{ $service->total_available_seats }}">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="price_at_booking" value="{{ $service->price }}">
                            <button type="submit" class="booking-btn single-service" data-service-id="{{ $service->id }}">
                                Book Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About this experience -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <h4 class="font-weight-bold mb-4">About this experience</h4>
                <p class="text-muted">
                    {{ $service->description }}
                </p>

                <!-- What's included -->
                <h4 class="font-weight-bold mt-5 mb-4">What's included</h4>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-check mr-3"></i> Professional guide
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check mr-3"></i> Safety equipment
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check mr-3"></i> Meals and refreshments
                    </li>
                </ul>

                <!-- Reviews -->
                <h4 class="font-weight-bold mt-5 mb-4">Reviews</h4>
                @forelse($service->reviews ?? [] as $review)
                    <div class="media mb-4">
                        <img src="https://via.placeholder.com/48" class="rounded-circle mr-3"
                            alt="{{ $review->user->name ?? 'User' }}">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">{{ $review->user->name ?? 'Anonymous' }}</h5>
                            <p class="text-muted small mb-2">{{ date('F j, Y', strtotime($review->created_at)) }}</p>
                            <p>{{ $review->comment }}</p>
                        </div>
                    </div>
                @empty
                    <div class="media mb-4">
                        <img src="https://via.placeholder.com/48" class="rounded-circle mr-3" alt="Sarah Johnson">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Sarah Johnson</h5>
                            <p class="text-muted small mb-2">March 1, 2025</p>
                            <p>Amazing experience! The views were breathtaking and our guide was extremely
                                knowledgeable.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Need help sidebar -->
            <div class="col-md-4">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <h5 class="font-weight-bold mb-4">Need help?</h5>
                        <a href="{{ route('contact') }}"
                            class="d-flex justify-content-between align-items-center text-dark text-decoration-none mb-3">
                            <span>Contact host</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <hr>
                        <a href=""
                            class="d-flex justify-content-between align-items-center text-dark text-decoration-none">
                            <span>FAQ</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
</x:layout>
