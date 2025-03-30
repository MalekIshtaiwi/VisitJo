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
                    <p class="hero-text">Experience the magic of ancient civilizations and natural beauty through our carefully curated tours and unique local experiences.</p>
                    <div class="buttons">
                        <a href="#" class="btn btn-explore text-white mr-3">Explore Tours</a>
                        <a href="#" class="btn btn-view text-white">View Experiences</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tours Section -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Arranged Tours</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="custom-card">
                    <div class="card-background" style="background-image: url('https://images.unsplash.com/photo-1488861860877-4be306363ab4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <h3 class="card-title">Adventures Tours</h3>
                        <p class="card-description">Experience the breathtaking beauty of Wadi Rum with our guided desert tours. Discover ancient landscapes and Bedouin culture.</p>
                        <a href="#" class="btn card-button text-white">Explore Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="custom-card">
                    <div class="card-background" style="background-image: url('https://images.unsplash.com/photo-1507181080368-cc2195abcde1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <h3 class="card-title">Historical Tours</h3>
                        <p class="card-description">Step back in time as you visit Petra, one of the world's most magnificent archaeological treasures.</p>
                        <a href="#" class="btn card-button text-white">Book Tour</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="custom-card">
                    <div class="card-background" style="background-image: url('https://images.unsplash.com/photo-1562979314-bee7453e911c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <h3 class="card-title">Religious Tours</h3>
                        <p class="card-description">Immerse yourself in authentic Jordanian culture with cooking classes, craft workshops, and local community visits.</p>
                        <a href="#" class="btn card-button text-white">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="custom-card">
                    <div class="card-background" style="background-image: url('https://images.unsplash.com/photo-1562979314-bee7453e911c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <h3 class="card-title">Cultural Experiences</h3>
                        <p class="card-description">Immerse yourself in authentic Jordanian culture with cooking classes, craft workshops, and local community visits.</p>
                        <a href="#" class="btn card-button text-white">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Events</h2>
        </div>
        <div class="row">
            <!-- Card 1: Accommodation Options -->
            <div class="col-md-6 col-lg-6">
                <div class="feature-card">
                    <div class="feature-header">
                        <div class="feature-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div>
                            <h3 class="feature-title">Accommodation</h3>
                            <p class="feature-description">Find the perfect place to stay during your journey through Jordan</p>
                        </div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-circle list-dot"></i> Luxury Resorts</li>
                        <li><i class="fas fa-circle list-dot"></i> Boutique Hotels</li>
                        <li><i class="fas fa-circle list-dot"></i> Bedouin Camps</li>
                    </ul>
                    <a href="#" class="btn action-button">Find Places</a>
                </div>
            </div>

            <!-- Card 2: Wellness & Spa -->
            <div class="col-md-6 col-lg-6">
                <div class="feature-card">
                    <div class="feature-header">
                        <div class="feature-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <div>
                            <h3 class="feature-title">Wellness & Spa</h3>
                            <p class="feature-description">Rejuvenate with traditional treatments and relaxation therapies</p>
                        </div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-circle list-dot"></i> Dead Sea Therapies</li>
                        <li><i class="fas fa-circle list-dot"></i> Hammam Rituals</li>
                        <li><i class="fas fa-circle list-dot"></i> Luxury Spa Resorts</li>
                    </ul>
                    <a href="#" class="btn action-button">View Treatments</a>
                </div>
            </div>

            <!-- Card 3: Guided Tours -->
            <div class="col-md-6 col-lg-6">
                <div class="feature-card">
                    <div class="feature-header">
                        <div class="feature-icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <div>
                            <h3 class="feature-title">Guided Tours</h3>
                            <p class="feature-description">Explore with knowledgeable local guides and customized itineraries</p>
                        </div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-circle list-dot"></i> Private Excursions</li>
                        <li><i class="fas fa-circle list-dot"></i> Group Adventures</li>
                        <li><i class="fas fa-circle list-dot"></i> Specialized Tours</li>
                    </ul>
                    <a href="#" class="btn action-button">Book Guide</a>
                </div>
            </div>

            <!-- Card 4: Shopping & Crafts -->
            <div class="col-md-6 col-lg-6">
                <div class="feature-card">
                    <div class="feature-header">
                        <div class="feature-icon">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div>
                            <h3 class="feature-title">Shopping & Crafts</h3>
                            <p class="feature-description">Discover authentic Jordanian handicrafts and souvenirs</p>
                        </div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-circle list-dot"></i> Traditional Markets</li>
                        <li><i class="fas fa-circle list-dot"></i> Artisan Workshops</li>
                        <li><i class="fas fa-circle list-dot"></i> Local Galleries</li>
                    </ul>
                    <a href="#" class="btn action-button">Start Shopping</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap 4 JS and dependencies -->

</x-layout>
