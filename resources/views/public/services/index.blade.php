<x-layout>
    <x-slot name="services_index_css">
        <style>
            :root {
                --primary: #92400b;
                --primary-dark: #793509;
                --secondary: #b85c38;
                --accent: #e09132;
                --light: #f7f1e5;
                --dark: #2d2424;
                --white: #ffffff;
            }
            .fas.fa-heart {
                color: red;
            }

            .far.fa-heart {
                color: var(--white);
            }
            .trip-card {
                border: none;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 10px 5px rgba(0, 0, 0, 0.1);
                transition: all 0.4s ease;
                height: 100%;
                background-color: var(--white);
                position: relative;
                margin: 15px 0;
                height: 490px;
                display: flex;
                flex-direction: column;
            }

            .trip-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 5px rgba(0, 0, 0, 0.2);
            }

            .card-img-wrapper {
                height: 200px;
                overflow: hidden;
                position: relative;
                flex-shrink: 0;
            }

            .card-img-top {
                height: 100%;
                object-fit: cover;
                transition: transform 0.8s ease;
            }

            .card-body {
                flex: 1;
                /* Take remaining space */
                display: flex;
                flex-direction: column;
                padding: 20px !important;
            }

            .card-text {
                flex: 1;
                overflow: hidden;
                display: -webkit-box;
                margin-bottom: 10px;
                height: 10px !important;
                /* Minimum text area height */
            }

            .trip-card:hover .card-img-top {
                transform: scale(1.15);
            }

            .trip-badge {
                position: absolute;
                top: 15px;
                right: 15px;
                background-color: var(--accent);
                color: var(--white);
                border-radius: 50px;
                font-size: 0.8rem;
                padding: 6px 14px;
                z-index: 2;
            }

            .favorite-btn {
                position: absolute;
                top: 15px;
                left: 15px;
                background: none;
                border: none;
                color: var(--white);
                font-size: 1.4rem;
                z-index: 2;
                transition: all 0.3s;
            }

            .favorite-btn.active {
                color: #e74c3c;
            }

            .book-now-btn {
                background-color: var(--primary);
                color: white;
                width: 100%;
                transition: all 0.3s;
                margin-top: auto;
            }

            .book-now-btn:hover {
                background-color: var(--primary-dark);
                transform: translateY(-2px);
            }

            .card-footer {
                flex-shrink: 0;
                padding: 15px 20px !important;
                background: transparent !important;
                border-top: none !important;
            }

            @media (max-width: 768px) {
                .section-container {
                    padding: 40px 0;
                }

                .section-title {
                    font-size: 1.75rem;
                }

                .card-img-wrapper {
                    height: 180px;
                }

                .favorite-btn {
                    font-size: 1.2rem;
                }
            }

            @media (max-width: 576px) {
                .section-title {
                    font-size: 1.5rem;
                }

                .owl-nav {
                    top: -50px;
                }

                .trip-badge {
                    font-size: 0.7rem;
                    padding: 4px 10px;
                }
            }

            body {
                background-color: #f8f9fa;
            }

            .filter-panel {
                background-color: #fff;
                border-radius: 5px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .filter-title {
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 20px;
                color: #212529;
                text-transform: uppercase;
            }

            .form-control {
                border-radius: 3px;
                margin-bottom: 15px;
                padding: 10px 15px;
                height: auto;
            }

            .search-btn {
                background-color: var(--primary);
                border: none;
                color: white;
                padding: 12px;
                border-radius: 3px;
                font-weight: 500;
                width: 100%;
                margin-top: 10px;
            }

            .search-btn:hover {
                background-color: var(--primary);
            }

            /* Star Rating Styles */
            .star-rating {
                color: var(--primary);
                font-size: 20px;
                margin-bottom: 5px;
            }

            .star-empty {
                color: #e0e0e0;
            }

            .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
                background-color: var(--primary);
                border-color: #ff6b6b;
            }

            /* Range Slider Styles */
            .price-range-slider {
                margin-bottom: 20px;
            }

            .price-range-label {
                display: flex;
                justify-content: space-between;
                margin-bottom: 10px;
            }

            .range-slider {
                -webkit-appearance: none;
                width: 100%;
                height: 5px;
                background: #e0e0e0;
                outline: none;
                border-radius: 5px;
            }

            .range-slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 20px;
                height: 20px;
                background: var(--primary);
                border-radius: 50%;
                cursor: pointer;
                border: 2px solid white;
            }

            .range-slider::-moz-range-thumb {
                width: 20px;
                height: 20px;
                background: #ff6b6b;
                border-radius: 50%;
                cursor: pointer;
                border: 2px solid white;
            }

            .range-values {
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }

            .range-value {
                font-size: 14px;
                color: #666;
            }

            .separator {
                margin: 0 5px;
            }
        </style>
    </x-slot>
    {{-- hero section --}}
    <section class="default-banner">
        <div class="item-slider relative" style="width: 100%; background: url(/images/hero1.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h1 class="text-uppercase text-white">New Adventure</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                            or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services section --}}
    <div class="container col-11 my-3">
        <div class="row">
            {{-- side filter --}}
            <div class="col-3">
                <div class="filter-panel shadow-sm">
                    <h5 class="filter-title">FIND CITY</h5>
                    <form action="{{ route('search') }}" method="GET">
                        @if(isset($type))
                            <input type="hidden" name="type_id" value="{{ $type->id }}">
                        @endif
                        <input type="text" name="location" class="form-control" placeholder="location" value="{{ request('location') }}">
                        <input type="date" name="date_from" class="form-control" placeholder="Date from" value="{{ request('date_from') }}">
                        <input type="date" name="date_to" class="form-control" placeholder="Date to" value="{{ request('date_to') }}">

                        <button type="submit" class="btn search-btn">Search</button>
                    </form>
                </div>
            </div>

            {{-- services cards --}}
            <div class="col-9">
                <div class="row">
                    @if($services->count() > 0)
                        @foreach ($services as $service)
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                            <a href="/services/show{{ $service->id }}">
                                <div class="trip-card h-100">
                                    <div class="card-img-wrapper position-relative">
                                        <div class="trip-badge">{{ $type->name }}</div>
                                        <form action="{{ route('wishlist.add') }}" method="POST" class="favorite-form">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                                            <button type="submit" class="favorite-btn">
                                                @php
                                                    $inWishlist = Auth::check() ? App\Models\WishlistItem::where('user_id', Auth::id())
                                                        ->where('service_id', $service->id)
                                                        ->exists() : false;
                                                @endphp
                                                <i class="{{ $inWishlist ? 'fas' : 'far' }} fa-heart"></i>
                                            </button>
                                        </form>
                                        <img src="{{ $service->image_path ?? 'https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' }}"
                                            class="card-img-top" alt="{{ $service->name }}" />
                                    </div>
                                    <div class="card-body p-4 d-flex flex-column">
                                        <h5 class="card-title mb-3 text-truncate">{{ $service->name }}</h5>
                                        <div class="trip-info mb-3">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-primary font-weight-bold">{{ $service->price ? '$' . number_format($service->price, 2) : 'Free' }}</span>
                                                <span class="text-muted">
                                                    <i class="fas fa-users"></i> {{ $service->total_available_seats }} left
                                                </span>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                @if($service->start_datetime && $service->end_datetime)
                                                    @php
                                                        $start = new DateTime($service->start_datetime);
                                                        $end = new DateTime($service->end_datetime);
                                                        $days = $end->diff($start)->days + 1;
                                                    @endphp
                                                    <span class="badge badge-secondary mr-2 mb-1">
                                                        <i class="fas fa-clock mr-1"></i>{{ $days }} {{ $days === 1 ? 'Day' : 'Days' }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-secondary mr-2 mb-1">
                                                        <i class="fas fa-clock mr-1"></i>3 Days
                                                    </span>
                                                @endif
                                                <span class="badge badge-secondary mb-1">
                                                    <i class="fas fa-map-marker-alt mr-1"></i>{{ $service->location ?? 'Location not specified' }}
                                                </span>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted mb-2 text-truncate">
                                            {{ Str::limit($service->description, 50, '...') }}
                                        </p>
                                        <button class="btn book-now-btn mt-auto" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                <h4>No services found</h4>
                                <p>Try adjusting your search criteria or check back later for new services.</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Pagination -->
                @if(method_exists($services, 'links'))
                <div class="d-flex justify-content-center mt-4">
                    {{ $services->appends(request()->query())->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
