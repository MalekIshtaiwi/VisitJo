<x-layout>
    <x-slot name="services_home_styles">
        <link rel="stylesheet" href="css/services.css">
        <style>
            .hero-section {
                position: relative;
                height: 500px;
                background-image: url('images/services_land_picture.jpg');
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
        </style>
    </x-slot name="services_home_styles">

    <!-- Landing Section -->
    <div class="hero-section" style="height: 700px;">
        <div class="container hero-content">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hero-title">Discover Jordan's<br>Timeless Wonders</h1>
                    <p class="hero-text">Experience the magic of ancient civilizations and natural beauty through our
                        carefully curated tours and unique local experiences.</p>
                    <div class="buttons">
                        <a href="#" class="btn btn-explore text-white mr-3">Explore Tours</a>
                        <a href="#" class="btn btn-view text-white">View Experiences</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach ($categories as $category)
        @if ($category->name == 'trip')
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Arranged {{ $category->name }}s</h2>
                </div>
                <div class="row">
                    @foreach ($category->types as $type)
                        <div class="col-md-6 col-lg-3">
                            <div class="custom-card">
                                <div class="card-background"
                                    style="background-image: url('https://images.unsplash.com/photo-1488861860877-4be306363ab4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                                </div>
                                <div class="card-overlay"></div>
                                <div class="card-content">
                                    <h3 class="card-title">{{ $type->name }}</h3>
                                    <p class="card-description">{{ $type->description }}</p>
                                    <form action="{{ route('services', [$type->id,$category->id]) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn card-button text-white">
                                            Explore Now
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">{{ $category->name }}s</h2>
            </div>
            <div class="row">
                <!-- Card 1: Accommodation Options -->
                @foreach ($category->types as $type )
                <div class="col-md-6 col-lg-6">
                    <div class="feature-card">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <div>
                                <h3 class="feature-title">{{ $type->name }}</h3>
                                <p class="feature-description">{{ $type->description }}</p>
                            </div>
                        </div>
                        <form action="{{ route('services', [$type->id,$category->id]) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn action-button">
                                Explore Now
                            </button>
                        </form>

                    </div>
                </div>
                @endforeach


            </div>
        </div>
        @endif
        <!-- Tours Section -->


        <!--Events Section -->

    @endforeach
    <!-- Bootstrap 4 JS and dependencies -->

</x-layout>
