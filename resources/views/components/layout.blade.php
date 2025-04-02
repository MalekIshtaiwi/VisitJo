<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        {{ $services_index_css ?? '' }}
        {{ $landing_css ?? '' }}
        {{ $services_home_styles ?? '' }}
        {{ $services_show_css ?? '' }}
        {{ $view_profile_css ?? ''}}
        {{ $Register_css ?? ''}}


        <style>
            .profile-img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                object-fit: cover;
                border: 2px solid #8bc34a;
                transition: all 0.3s;
            }

            .profile-toggle {
                display: flex;
                align-items: center;
                background: none !important;
            }

            .profile-toggle::after {
                display: none;
            }

            .profile-img:hover {
                border-color: #689f38;
                transform: scale(1.05);
            }

            .profile-dropdown {
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                border: none;
                padding: 0;
                min-width: 200px;
                margin-top: 10px;
            }

            .profile-dropdown .dropdown-item {
                padding: 12px 20px;
            }

            .profile-dropdown .dropdown-item:hover {
                background-color: #f8f9fa;
            }

            .profile-dropdown .dropdown-item i {
                margin-right: 10px;
                color: #666;
            }

            .dropdown-divider {
                margin: 0;
            }
        </style>
</head>
<body>
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                      <a class="navbar-brand" href="index.html">
                          <img src="img/logo.png" alt="">
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white lnr lnr-menu"></span>
                      </button>

                      <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <x-nav-link href="{{ route('/') }}">Home</x-nav-link>
                            <x-nav-link href="{{ route('about') }}">About</x-nav-link>
                            <x-nav-link href="{{ route('services-home') }}">Services</x-nav-link>
                            <x-nav-link href="{{ route('contact') }}">Contact</x-nav-link>



                            <!-- Dropdown -->
                            <!-- Profile Picture Dropdown -->
                            @guest
                            <li class="dropdown ml-3">
                                <a class="dropdown-toggle profile-toggle p-0" href="#" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="https://images.vexels.com/media/users/3/140748/isolated/svg/5b078a59390bb4666df98b49f1cdedd0.svg" alt="Profile" class="profile-img">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown" aria-labelledby="profileDropdown">
                                  <a class="dropdown-item" href="{{ route('register') }}">
                                     Register
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="{{ route('login') }}">
                                     Login
                                  </a>
                                </div>
                              </li>
                            @endguest

                            @auth
                            <li class="dropdown ml-3">
                                <a class="dropdown-toggle profile-toggle p-0" href="#" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="https://images.vexels.com/media/users/3/140748/isolated/svg/5b078a59390bb4666df98b49f1cdedd0.svg" alt="Profile" class="profile-img">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown" aria-labelledby="profileDropdown">
                                  <a class="dropdown-item" href="{{ route('profile.index') }}">
                                    <i class="fa fa-user"></i> View Profile
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                  </form>
                                </div>
                              </li>
                            @endauth
                        </ul>
                      </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->
    </section>



        {{ $slot }}

        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                            </p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">

                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="d-flex flex-row">

                                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>

                                        <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                                    </div>
                                    <div class="info"></div>
                                    </form>
                            </div>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    {{-- <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/main.js"></script> --}}
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://kit.fontawesome.com/131c85fc14.js" crossorigin="anonymous"></script>


    {{ $services_index_script ?? '' }}
    {{ $landing_script ?? '' }}
    {{ $Register_script ?? ''}}

</body>
</html>
