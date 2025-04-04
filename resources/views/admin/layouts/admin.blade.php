<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title', 'Dashboard')</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/css/admin/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/css/admin/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/css/admin/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/css/admin/img/favicons/favicon.ico">
    <link rel="manifest" href="/css/admin/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/css/admin/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/adminVendors/simplebar/simplebar.min.js"></script>
    <script src="/adminJS/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="/adminVendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="/css/admin/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="/css/admin/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="/css/admin/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="/css/admin/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    <link href="/adminVendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="/adminVendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="/adminVendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    @stack('Style')
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-vertical navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
              <div class="navbar-vertical-content">
                <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                  <!-- Home Section -->

                  <!-- Apps Section Header -->
                  <li class="nav-item">
                      <p class="navbar-vertical-label">Visit JO</p>
                      <hr class="navbar-vertical-line" />
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <div class="d-flex align-items-center ps-3">
                          <span class="nav-link-text">Home</span>
                        </div>
                      </a>
                    </li>

                  <!-- Admin Items - Flattened -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('admin.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Admins</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('customers.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Customers</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('users.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Users</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('categories.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Categories</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('services.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Services</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('admin.reviews.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Reviews</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('admin.bookings.index') }}">
                      <div class="d-flex align-items-center ps-3">
                        <span class="nav-link-text">Bookings</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="navbar-vertical-footer">
                <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
                  <span class="uil uil-left-arrow-to-left fs-8"></span>
                  <span class="uil uil-arrow-from-right fs-8"></span>
                  <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
                </button>
              </div>
            </div>
          </nav>

          <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="navbar-logo">

            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="{{ route('dashboard.index') }}">
              <div class="d-flex align-items-center">
                {{-- <div class="d-flex align-items-center"><img src="" alt="LOGO" width="27" /> --}}
                  <h5 class="logo-text ms-2 d-none d-sm-block">Visit Jo</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
              <input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
              <button class="btn btn-link p-0" aria-label="Close"></button>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-body-emphasis position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">


                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="/css/admin/img/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>

                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="/css/admin/img/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="/css/admin/img/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="/css/admin/img/nav-ikkcons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cosmetica</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="/css/admin/img/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="/css/admin/img/team/40x40/57.webp" alt="" />

                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="/css/admin/img/team/72x72/57.webp" alt="" />

                      </div>
                      <h6 class="mt-2 text-body-emphasis">ADMIN NAME</h6>
                    </div>
                    <div class="mb-3 mx-3">
                      <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
                    </div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent">
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>


      <!-- ENd of nav -->



        <div class="content">

          @yield('content')

        </div>



        <!-- footer -->

        <div class="container" style="margin-top:5rem">
            <footer class="footer position-absolute">
              <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                  <p class="mb-0 mt-2 mt-sm-0 text-body">Visit Jo <span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2025 &copy;<a class="mx-1" href="">ممكن نعمل لينك viw للموقغ؟</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                  <p> ممكن لوجو او اشي شوفي بعدين</p>
                </div>
              </div>
            </footer>

        </div>

    </main>



    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- =============================================== -->
    <script src="/adminVendors/popper/popper.min.js"></script>
    <script src="/adminVendors/bootstrap/bootstrap.min.js"></script>
    <script src="/adminVendors/anchorjs/anchor.min.js"></script>
    <script src="/adminVendors/is/is.min.js"></script>
    <script src="/adminVendors/fontawesome/all.min.js"></script>
    <script src="/adminVendors/lodash/lodash.min.js"></script>
    <script src="/adminVendors/list.js/list.min.js"></script>
    <script src="/adminVendors/feather-icons/feather.min.js"></script>
    <script src="/adminVendors/dayjs/dayjs.min.js"></script>
    <script src="/adminVendors/leaflet/leaflet.js"></script>
    <script src="/adminVendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="/adminVendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="/adminJS/phoenix.js"></script>
    <script src="/adminVendors/echarts/echarts.min.js"></script>
    <script src="/adminJS/ecommerce-dashboard.js"></script>

  </body>

</html>
