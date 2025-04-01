<x:layout>
    <!-- Bootstrap 4 CSS -->
    <x-slot name="services_show_css">

        <link rel="stylesheet" href="css/services.css">
        <style>
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

            .form-title {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 20px;
            }

            .form-control {
                margin-bottom: 15px;
                border-radius: 0;
            }

            .search-btn {
                background-color: #f05454;
                border: none;
                color: white;
                padding: 10px;
                border-radius: 0;
                width: 100%;
                font-weight: 500;
            }

            .range-container {
                padding: 0 10px;
            }

            .range-slider {
                width: 100%;
                position: relative;
            }

            .range-slider .range-values {
                display: flex;
                justify-content: space-between;
                margin-bottom: 5px;
            }

            .price-slider {
                -webkit-appearance: none;
                width: 100%;
                height: 5px;
                background: #f05454;
                outline: none;
            }

            .price-slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 15px;
                height: 15px;
                border-radius: 50%;
                background: #f05454;
                cursor: pointer;
            }

            .star-rating-header {
                font-size: 18px;
                font-weight: 600;
                margin-top: 10px;
            }

            .star-rating {
                color: #f05454;
                font-size: 20px;
            }

            .img-container {
                padding-left: 0;
            }

            .booking-form {
                max-width: 700px;
                margin: 50px auto;
                padding: 20px;
            }

            .form-control {
                height: 50px;
                border-radius: 0;
            }

            .booking-title {
                text-align: center;
                margin-bottom: 40px;
                color: #333;
            }

            .price-display {
                background-color: #f8f9fa;
                border: 1px solid #ced4da;
                height: 50px;
                display: flex;
                align-items: center;
                padding: 0 12px;
            }

            .book-btn {
                background-color: #f05454;
                border: none;
                color: white;
                height: 50px;
                border-radius: 0;
                font-weight: 500;
            }

            .book-btn:hover {
                background-color: #e04444;
                color: white;
            }

            .reviews-section {
                padding: 50px 0;
                background-color: white;
            }

            .section-title {
                text-align: center;
                margin-bottom: 40px;
                color: #333;
            }

            .review-card {
                margin-bottom: 30px;
                border: none;
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .review-card:hover {
                transform: translateY(-5px);
            }

            .card-header {
                background-color: #fff;
                border-bottom: 1px solid #f0f0f0;
                padding: 15px 20px;
            }

            .reviewer-name {
                font-weight: 600;
                margin-bottom: 0;
            }

            .star-rating {
                color: #ffc107;
                margin-top: 5px;
            }

            .star-empty {
                color: #e0e0e0;
            }

            .card-body {
                padding: 20px;
            }

            .review-text {
                color: #666;
                line-height: 1.6;
            }

            .review-date {
                color: #999;
                font-size: 0.85rem;
                margin-top: 15px;
                text-align: right;
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


      <div class="container py-4">
        <div class="row">
          <!-- Left Column - Image -->
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="card border-0 bg-secondary position-relative">
              <div class="position-absolute p-2" style="right: 10px; top: 10px; z-index: 2;">
                <button class="btn btn-light rounded-circle">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              @if($service->image_path)
                <img src="{{ asset($service->image_path) }}" class="card-img-top" alt="{{ $service->name }}">
              @else
                <div class="text-center py-5">
                  {{ $service->name }} Image
                </div>
              @endif
            </div>
          </div>

          <!-- Right Column - Service Details -->
          <div class="col-lg-6">
            <!-- Category Pills -->
            <div class="mb-3">
              <span class="badge badge-pill badge-primary px-3 py-2 mr-2">{{ $service->category->name }}</span>
              <span class="badge badge-pill badge-info px-3 py-2">{{ $service->type->name }}</span>
            </div>

            <!-- Service Name -->
            <h1 class="h2 font-weight-bold mb-3">{{ $service->name }}</h1>

            <!-- Location -->
            @if($service->location)
            <p class="mb-3">
              <i class="fas fa-map-marker-alt mr-2"></i> {{ $service->location }}
            </p>
            @endif

            <!-- Rating -->
            <p class="mb-4">
              <i class="fas fa-star text-warning mr-1"></i>
              <span class="font-weight-bold">{{ $averageRating ?? '0.0' }}</span>
              <span class="text-muted">({{ $reviewsCount ?? '0' }} reviews)</span>
            </p>

            <!-- Price and Availability -->
            <div class="row mb-3">
              <div class="col-md-6">
                <p class="text-muted mb-1">Price per person</p>
                <h3 class="font-weight-bold">
                  @if($service->price)
                    ${{ number_format($service->price, 2) }}
                  @else
                    Contact for pricing
                  @endif
                </h3>
              </div>
              <div class="col-md-6 text-md-right">
                <p class="text-muted mb-1">Available spots</p>
                <h5 class="font-weight-bold">{{ $service->total_available_seats }} seats left</h5>
              </div>
            </div>

            <!-- Date -->
            @if($service->start_datetime && $service->end_datetime)
            <div class="mb-4">
              <p class="text-muted mb-1">Date</p>
              <p class="font-weight-bold">
                <i class="far fa-calendar-alt mr-2"></i>
                {{ date('F j, Y', strtotime($service->start_datetime)) }} -
                {{ date('F j, Y', strtotime($service->end_datetime)) }}
              </p>
            </div>
            @endif

            <!-- Book Now Button -->
            <div class="mb-4">
                <input type="hidden" name="service_id" value="{{ $service->id }}">
                <button type="submit" class="btn btn-dark btn-lg btn-block py-3">Book Now</button>

            </div>
          </div>
        </div>

        <!-- About this experience -->
        <div class="row mt-5">
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
              <img src="https://via.placeholder.com/48" class="rounded-circle mr-3" alt="{{ $review->user->name ?? 'User' }}">
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
                <p>Amazing experience! The views were breathtaking and our guide was extremely knowledgeable.</p>
              </div>
            </div>
            @endforelse
          </div>

          <!-- Need help sidebar -->
          <div class="col-md-4">
            <div class="card border-0 bg-light">
              <div class="card-body">
                <h5 class="font-weight-bold mb-4">Need help?</h5>
                <a href="{{ route('contact') }}" class="d-flex justify-content-between align-items-center text-dark text-decoration-none mb-3">
                  <span>Contact host</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
                <hr>
                <a href="" class="d-flex justify-content-between align-items-center text-dark text-decoration-none">
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
