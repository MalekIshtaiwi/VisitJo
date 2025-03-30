<x:layout>
        <!-- Bootstrap 4 CSS -->
        <x-slot name="services_show_css">
            <link rel="stylesheet" href="css/services.css">
            <style>
                .hero-section {

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
        </x-slot name="services_show">


    <!-- Landing Section -->
    <div class="hero-section"
        style="height: 700px; display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="container hero-content">
            <h1 class="hero-title">Discover Jordan's<br>Timeless Wonders</h1>
        </div>
    </div>
    <br><br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Image container centered -->
                <div class="img-container">
                    <img src="images/services_land_picture.jpg"
                        alt="Tropical Resort with Palm Trees and Thatched Roof Buildings" class="resort-image">
                </div>

                <br>
                <!-- Description container with left alignment -->
                <div class="description-container text-left">
                    <p>Our Best hotels & Rooms</p>
                    <h2>Description</h2>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline
                        of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                        road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                    </p>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline
                        of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                        road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                    </p>
                </div>
                <div class="container">
                    <div class="booking-form">
                        <h2 class="booking-title">Check Availability & Booking</h2>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" id="quantity"
                                    placeholder="Quantity of tickets" min="1" value="1">
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="price-display">
                                    <strong>Total Cost:</strong> <span id="cost-display" class="ml-2">$50.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn book-btn btn-block">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="reviews-section" style="display: flex; justify-content: center; text-align: center;">
                <div class="container">
                    <h2 class="section-title">What Our Travelers Say</h2>

                    <div class="row">
                        <!-- Review Card 1 -->
                        <div class="col-md-4">
                            <div class="card review-card">
                                <div class="card-header">
                                    <h5 class="reviewer-name">Sarah Johnson</h5>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="review-text">This was an absolutely magical experience! The guide was
                                        knowledgeable and the views were breathtaking. Would definitely recommend this
                                        trip to anyone looking for adventure.</p>
                                    <p class="review-date">March 15, 2025</p>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 2 -->
                        <div class="col-md-4">
                            <div class="card review-card">
                                <div class="card-header">
                                    <h5 class="reviewer-name">Michael Rodriguez</h5>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="review-text">Great value for money and an amazing cultural experience. The
                                        only reason I didn't give 5 stars is because the food options were somewhat
                                        limited for vegetarians.</p>
                                    <p class="review-date">February 28, 2025</p>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 3 -->
                        <div class="col-md-4">
                            <div class="card review-card">
                                <div class="card-header">
                                    <h5 class="reviewer-name">Emily Chen</h5>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="review-text">The landscapes were even more beautiful than the photos! Our
                                        guide shared fascinating stories about local traditions. The sunset over the
                                        desert was unforgettable.</p>
                                    <p class="review-date">March 22, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->

</x:layout>
