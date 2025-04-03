<x-layout>
    <x-slot name="landing_css">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    </x-slot name="landing_css">

    <section class="default-banner active-blog-slider ">
        <div class="item-slider relative" style="width: 100%; background: url(/images/hero1.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                            <h1 class="text-uppercase text-white">New Adventure</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                            or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#" class="text-uppercase header-btn">Discover Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="item-slider relative" style="width: 100%; background: url(/images/hero2.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                            <h1 class="text-uppercase text-white">New Trip</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                            or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#" class="text-uppercase header-btn">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-slider relative" style="width: 100%; background: url(/images/hero3.jpg);background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                            <h1 class="text-uppercase text-white">New Experience</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                            or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#" class="text-uppercase header-btn">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container">
        <div class="container">
            <h2 class="section-title text-center">Discover Jordan's Top Trips</h2>

            <div class="owl-carousel owl-theme">
                <!-- Trip Cards - Bootstrap Grid Inside Carousel -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="trip-card">
                                <div class="card-img-wrapper">
                                    <div class="trip-badge">Historical</div>
                                    <button class="favorite-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        class="card-img-top" alt="Petra" />
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">Petra & Wadi Rum Adventure</h5>
                                    <div class="trip-info mb-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-primary font-weight-bold">$299</span>
                                            <span class="text-muted">
                                                <i class="fas fa-users"></i> 15 left
                                            </span>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge badge-secondary mr-2">
                                                <i class="fas fa-clock mr-1"></i>3 Days
                                            </span>
                                            <span class="badge badge-secondary">
                                                <i class="fas fa-hotel mr-1"></i>4-Star
                                            </span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-2">
                                        Explore
                                    </p>
                                    <button class="btn book-now-btn mt-auto" type="submit">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trip Card 2 -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="trip-card">
                                <div class="card-img-wrapper">
                                    <div class="trip-badge">Luxury</div>
                                    <button class="favorite-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <img src="https://images.unsplash.com/photo-1581337204873-ef36aa186caa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        class="card-img-top" alt="Dead Sea" />
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">Dead Sea Retreat</h5>
                                    <div class="trip-info mb-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-primary font-weight-bold">$399</span>
                                            <span class="text-danger font-weight-bold">
                                                <i class="fas fa-users"></i> 3 left
                                            </span>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge badge-secondary mr-2">
                                                <i class="fas fa-clock mr-1"></i>2 Days
                                            </span>
                                            <span class="badge badge-secondary">
                                                <i class="fas fa-hotel mr-1"></i>5-Star
                                            </span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-1">
                                        Relax in mineral-rich waters and luxury spa treatments at
                                        the lowest point on Earth.
                                    </p>
                                    <button class="btn book-now-btn mt-auto" type="submit">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="trip-card">
                                <div class="card-img-wrapper">
                                    <div class="trip-badge">Luxury</div>
                                    <button class="favorite-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <img src="https://images.unsplash.com/photo-1581337204873-ef36aa186caa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        class="card-img-top" alt="Dead Sea" />
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">Dead Sea Retreat</h5>
                                    <div class="trip-info mb-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-primary font-weight-bold">$399</span>
                                            <span class="text-danger font-weight-bold">
                                                <i class="fas fa-users"></i> 3 left
                                            </span>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge badge-secondary mr-2">
                                                <i class="fas fa-clock mr-1"></i>2 Days
                                            </span>
                                            <span class="badge badge-secondary">
                                                <i class="fas fa-hotel mr-1"></i>5-Star
                                            </span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-1">
                                        Relax in mineral-rich waters and luxury spa treatments at
                                        the lowest point on Earth.
                                    </p>
                                    <button class="btn book-now-btn mt-auto" type="submit">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="trip-card">
                                <div class="card-img-wrapper">
                                    <div class="trip-badge">Luxury</div>
                                    <button class="favorite-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <img src="https://images.unsplash.com/photo-1581337204873-ef36aa186caa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        class="card-img-top" alt="Dead Sea" />
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">Dead Sea Retreat</h5>
                                    <div class="trip-info mb-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-primary font-weight-bold">$399</span>
                                            <span class="text-danger font-weight-bold">
                                                <i class="fas fa-users"></i> 3 left
                                            </span>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge badge-secondary mr-2">
                                                <i class="fas fa-clock mr-1"></i>2 Days
                                            </span>
                                            <span class="badge badge-secondary">
                                                <i class="fas fa-hotel mr-1"></i>5-Star
                                            </span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-1">
                                        Relax in mineral-rich waters and luxury spa treatments at
                                        the lowest point on Earth.
                                    </p>
                                    <button class="btn book-now-btn mt-auto" type="submit">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="trip-card">
                                <div class="card-img-wrapper">
                                    <div class="trip-badge">Luxury</div>
                                    <button class="favorite-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <img src="https://images.unsplash.com/photo-1581337204873-ef36aa186caa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        class="card-img-top" alt="Dead Sea" />
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">Dead Sea Retreat</h5>
                                    <div class="trip-info mb-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-primary font-weight-bold">$399</span>
                                            <span class="text-danger font-weight-bold">
                                                <i class="fas fa-users"></i> 3 left
                                            </span>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge badge-secondary mr-2">
                                                <i class="fas fa-clock mr-1"></i>2 Days
                                            </span>
                                            <span class="badge badge-secondary">
                                                <i class="fas fa-hotel mr-1"></i>5-Star
                                            </span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-1">
                                        Relax in mineral-rich waters and luxury spa treatments at
                                        the lowest point on Earth.
                                    </p>
                                    <button class="btn book-now-btn mt-auto" type="submit">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more trip cards following the same structure -->
            </div>
        </div>
    </section>

    <section class="restaurant-section">
        <div class="container">
          <h2
            class="text-center mb-4"
            style="color: var(--dark); font-weight: 600"
          >
            Top Restaurants in Jordan
          </h2>

          <div class="restaurant-grid">
            <!-- Restaurant 1 -->
            <div class="restaurant-card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="Hashem Restaurant"
                />
                <span class="card-badge">Traditional</span>
              </div>
              <div class="card-content">
                <h3 class="restaurant-name">Hashem Restaurant</h3>
                <div class="rating">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <span class="rating-number">4.5</span>
                </div>
                <div class="details">
                  <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Downtown Amman</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-wallet"></i>
                    <span>$$</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-clock"></i>
                    <span>24/7</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Restaurant 2 -->
            <div class="restaurant-card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="Fakhr El-Din"
                />
                <span class="card-badge">Fine Dining</span>
              </div>
              <div class="card-content">
                <h3 class="restaurant-name">Fakhr El-Din</h3>
                <div class="rating">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="rating-number">5.0</span>
                </div>
                <div class="details">
                  <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Jabal Amman</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-wallet"></i>
                    <span>$$$</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-clock"></i>
                    <span>7am-12am</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant-card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="Fakhr El-Din"
                />
                <span class="card-badge">Fine Dining</span>
              </div>
              <div class="card-content">
                <h3 class="restaurant-name">Fakhr El-Din</h3>
                <div class="rating">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="rating-number">5.0</span>
                </div>
                <div class="details">
                  <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Jabal Amman</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-wallet"></i>
                    <span>$$$</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-clock"></i>
                    <span>7am-12am</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant-card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="Fakhr El-Din"
                />
                <span class="card-badge">Fine Dining</span>
              </div>
              <div class="card-content">
                <h3 class="restaurant-name">Fakhr El-Din</h3>
                <div class="rating">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="rating-number">5.0</span>
                </div>
                <div class="details">
                  <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Jabal Amman</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-wallet"></i>
                    <span>$$$</span>
                  </div>
                  <div class="detail-item">
                    <i class="fas fa-clock"></i>
                    <span>7am-12am</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add more restaurants here -->

          </div>
        </div>
      </section>

      <div class="testimonial-section">
        <div class="container">
            <h2 class="section-title">What Our Travelers Say</h2>

            <div class="owl-carousel testimonial-carousel owl-theme">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">Our Petra Adventure tour was absolutely breathtaking! The guides were knowledgeable and friendly, making the entire experience unforgettable. I never imagined I'd see such incredible ancient architecture up close.</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image-container">
                            <img src="/api/placeholder/120/120" class="author-image" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h5 class="author-name">Sarah Johnson</h5>
                            <span class="author-trip">Petra Adventure Tour</span>
                            <span class="author-date">March 15, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">Floating in the Dead Sea was a surreal experience! The hotel was luxurious and the spa treatments were amazing. This relaxation trip was exactly what I needed, and the team made sure everything was perfect.</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image-container">
                            <img src="/api/placeholder/120/120" class="author-image" alt="Michael Chen">
                        </div>
                        <div class="author-info">
                            <h5 class="author-name">Michael Chen</h5>
                            <span class="author-trip">Dead Sea Relaxation</span>
                            <span class="author-date">February 22, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">Camping under the stars in Wadi Rum was magical! The jeep safari was thrilling and our Bedouin hosts were so welcoming. The food cooked in the desert was some of the best I've had in my travels.</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image-container">
                            <img src="/api/placeholder/120/120" class="author-image" alt="Emma Rodriguez">
                        </div>
                        <div class="author-info">
                            <h5 class="author-name">Emma Rodriguez</h5>
                            <span class="author-trip">Wadi Rum Desert Safari</span>
                            <span class="author-date">January 8, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">The diving experience in Aqaba was incredible! We saw so many vibrant coral reefs and colorful fish. The instructors were patient and professional, making it a perfect experience even for beginners.</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image-container">
                            <img src="/api/placeholder/120/120" class="author-image" alt="David Wilson">
                        </div>
                        <div class="author-info">
                            <h5 class="author-name">David Wilson</h5>
                            <span class="author-trip">Aqaba Red Sea Diving</span>
                            <span class="author-date">March 2, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">Walking through the Roman ruins of Jerash felt like stepping back in time. Our guide was incredibly knowledgeable about the history and architecture. I learned so much while enjoying the beautiful scenery.</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image-container">
                            <img src="/api/placeholder/120/120" class="author-image" alt="Olivia Thompson">
                        </div>
                        <div class="author-info">
                            <h5 class="author-name">Olivia Thompson</h5>
                            <span class="author-trip">Jerash Roman Ruins</span>
                            <span class="author-date">February 14, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<x-slot name="landing_script">

    <script>
        $(document).ready(function(){
            $(".testimonial-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                navText: ["<span>&lsaquo;</span>","<span>&rsaquo;</span>"],
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:2
                    },
                    1200:{
                        items:3
                    }
                }
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: false,
            margin: 24,
            nav: false,
            dots: false,
            responsiveClass: false,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 20,
                },
                576: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
            },
        });

        // Favorite button functionality
    });
</script>
</x-slot name="landing_script">
</x-layout>
