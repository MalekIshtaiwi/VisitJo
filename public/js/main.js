
$(document).ready(function(){
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;


	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);

  //-------- Active Sticky Js ----------//
  $(".default-header").sticky({topSpacing:0});


     if(document.getElementById("default-select")){
          $('select').niceSelect();
    };

    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery:{
        enabled:true
        }
    });

  // $('.navbar-nav>li>a').on('click', function(){
  //     $('.navbar-collapse').collapse('hide');
  // });


    //  Counter Js

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    $('.active-works-carousel').owlCarousel({
        items:1,
        loop:true,
        margin: 100,
        dots: true,
        autoplay:true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1,
            },
            768: {
                items: 1,
            }
        }
    });

    $('.active-gallery').owlCarousel({
        items:1,
        loop:true,
        dots: true,
        autoplay:true,
        nav:true,
        navText: ["<span class='lnr lnr-arrow-up'></span>",
        "<span class='lnr lnr-arrow-down'></span>"],
            responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
            900: {
                items: 6,
            }

        }
    });


$('.active-blog-slider').owlCarousel({
        loop: true,
        dots: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 2000,
        smartSpeed: 1000,
        animateOut: 'fadeOut',
      })


    // Select all links with hashes
    $('.navbar-nav a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .on('click',function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top-50
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
    });

      $(document).ready(function() {
          $('#mc_embed_signup').find('form').ajaxChimp();
      });

 });
 $(document).ready(function() {
    // Toggle booking container when cart button is clicked
    $("#cartButton").click(function() {
        if ($("#bookingContainer").hasClass("slide-out")) {
            $("#bookingContainer").removeClass("slide-out").addClass("slide-in");
            $("body").addClass("overlay-active");
            // Close wishlist if it's open
            $("#wishlistContainer").removeClass("slide-in").addClass("slide-out");
        } else {
            $("#bookingContainer").removeClass("slide-in").addClass("slide-out");
            $("body").removeClass("overlay-active");
        }
    });

    // Close cart when close button is clicked
    $("#closeCart").click(function() {
        $("#bookingContainer").removeClass("slide-in").addClass("slide-out");
        $("body").removeClass("overlay-active");
    });

    // Toggle wishlist container when wishlist button is clicked
    $("#wishlistButton").click(function() {
        if ($("#wishlistContainer").hasClass("slide-out")) {
            $("#wishlistContainer").removeClass("slide-out").addClass("slide-in");
            $("body").addClass("overlay-active");
            // Close cart if it's open
            $("#bookingContainer").removeClass("slide-in").addClass("slide-out");
        } else {
            $("#wishlistContainer").removeClass("slide-in").addClass("slide-out");
            $("body").removeClass("overlay-active");
        }
    });

    // Close wishlist when close button is clicked
    $("#closeWishlist").click(function() {
        $("#wishlistContainer").removeClass("slide-in").addClass("slide-out");
        $("body").removeClass("overlay-active");
    });

    // Close when clicking outside
    $(document).click(function(event) {
        if ((!$(event.target).closest('#bookingContainer').length &&
            !$(event.target).closest('#cartButton').length &&
            $("#bookingContainer").hasClass("slide-in")) ||
            (!$(event.target).closest('#wishlistContainer').length &&
            !$(event.target).closest('#wishlistButton').length &&
            $("#wishlistContainer").hasClass("slide-in"))) {
            $("#bookingContainer").removeClass("slide-in").addClass("slide-out");
            $("#wishlistContainer").removeClass("slide-in").addClass("slide-out");
            $("body").removeClass("overlay-active");
        }
    });

    // Prevent clicks inside containers from closing them
    $("#bookingContainer, #wishlistContainer").click(function(event) {
        event.stopPropagation();
    });

    // Handle quantity controls
    $(".quantity-control .btn").click(function() {
        var quantityElem = $(this).siblings(".quantity");
        var currentText = quantityElem.text();
        var currentNum = parseInt(currentText);

        if ($(this).text() === "+" && currentNum < 10) {
            quantityElem.text((currentNum + 1) + " nights");
        } else if ($(this).text() === "-" && currentNum > 1) {
            quantityElem.text((currentNum - 1) + " nights");
        }

        // Here you would update the totals based on the new quantities
        updateTotals();
    });

    // Handle delete buttons for cart
    $(".delete-btn").click(function() {
        $(this).closest(".booking-item").fadeOut(300, function() {
            $(this).remove();
            updateTotals();

            // Update cart count
            var itemCount = $(".booking-item").length;
            $(".cart-count").text(itemCount);

            if (itemCount === 0) {
                // Add empty cart message if needed
                $(".booking-card .card-body").append('<div class="p-4 text-center">Your cart is empty</div>');
            }
        });
    });

    // Handle remove buttons for wishlist
    $(".remove-wishlist-btn").click(function() {
        $(this).closest(".wishlist-item").fadeOut(300, function() {
            $(this).remove();

            // Update wishlist count
            var itemCount = $(".wishlist-item").length;
            $(".wishlist-count").text(itemCount);

            if (itemCount === 0) {
                // Add empty wishlist message
                $(".wishlist-items").append('<div class="p-4 text-center">Your wishlist is empty</div>');
            }
        });
    });

    // Handle add to cart buttons
    $(".add-to-cart-btn").click(function() {
        // Get the current cart count
        var cartCount = parseInt($(".cart-count").text());

        // Increment the cart count
        $(".cart-count").text(cartCount + 1);

        // Show a success message or animation
        var item = $(this).closest(".wishlist-item");
        item.append('<div class="added-to-cart">Added to cart!</div>');

        $(".added-to-cart").fadeIn(200).delay(1000).fadeOut(200, function() {
            $(this).remove();
        });

        // Optional: Remove from wishlist after adding to cart
        // item.fadeOut(300, function() {
        //     $(this).remove();
        //     updateWishlistCount();
        // });
    });

    function updateTotals() {
        // This is a placeholder for your actual calculation logic
        // In a real application, you would calculate the totals based on the items and quantities
        console.log("Totals updated");
    }

    function updateWishlistCount() {
        var itemCount = $(".wishlist-item").length;
        $(".wishlist-count").text(itemCount);

        if (itemCount === 0) {
            $(".wishlist-items").append('<div class="p-4 text-center">Your wishlist is empty</div>');
        }
    }
});

$(document).ready(function() {
            // Favorite button functionality
            $(".favorite-btn").click(function() {
                $(this).toggleClass("active");
                $(this).find("i").toggleClass("far fas");
            });

            // Create the booking popover HTML
            const popoverHtml = `
            <div class="booking-popover" id="bookingPopover" style="display: none;">
                <div class="booking-header">
                    Booking Details
                    <span class="close-btn">&times;</span>
                </div>

                <img src="" alt="Tour Image" class="tour-image">

                <div class="tour-title"></div>

                <div class="tour-info">
                    <div class="tour-detail">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                        </svg>
                        <span class="available-date">Available from Jan 15, 2025</span>
                    </div>

                    <div class="tour-detail">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                        <span class="duration">8 hours</span>
                    </div>
                </div>

                <div class="price-section">
                    <div class="price-row">
                        <div class="price-label">Price per person</div>
                        <div class="price-value"></div>
                    </div>

                    <div class="price-row">
                        <div class="price-label">Quantity</div>
                        <div class="quantity-input-wrapper">
                            <input type="number" class="form-control quantity-selector" value="1" min="1" max="99">
                        </div>
                    </div>
                </div>

                <div class="total-section">
                    <div class="total-label">Total</div>
                    <div class="total-value"></div>
                </div>

                <div style="padding: 0 15px 15px;">
                    <button class="book-now-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16" style="margin-right: 8px;">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                        </svg>
                        Book Now
                    </button>
                </div>

                <div class="secure-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                        <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Secure booking · Instant confirmation
                </div>
            </div>
            <div class="booking-overlay" id="bookingOverlay" style="display: none;"></div>
            `;

            // Append the popover and overlay to the body
            $('body').append(popoverHtml);

            // Override the default form submission for Book Now buttons
            $(".book-now-btn").click(function(e) {
                e.preventDefault();

                // Get card data
                const card = $(this).closest('.trip-card');
                const title = card.find('.card-title').text();
                const price = card.find('.text-primary').text();
                const imageUrl = card.find('.card-img-top').attr('src');
                const seatsLeft = card.find('.text-muted i.fas.fa-users').parent().text().trim();
                const duration = card.find('.badge i.fas.fa-clock').parent().text().trim();

                // Fill popover with card data
                $('#bookingPopover .tour-title').text(title);
                $('#bookingPopover .tour-image').attr('src', imageUrl);
                $('#bookingPopover .price-value').text(price);
                $('#bookingPopover .total-value').text(price);
                $('#bookingPopover .duration').text(duration);

                // Show the overlay and popover
                $('#bookingOverlay').fadeIn(300);
                $('#bookingPopover').fadeIn(300);
            });

            // Close popover when clicking the close button or overlay
            $('#bookingPopover .close-btn, #bookingOverlay').click(function() {
                $('#bookingPopover, #bookingOverlay').fadeOut(300);
            });

            // Handle quantity change
            $('.quantity-selector').on('change input', function() {
                const basePrice = $('#bookingPopover .price-value').text().replace(/[^0-9.]/g, '');
                const quantity = parseInt($(this).val()) || 1; // Default to 1 if invalid
                const total = basePrice * quantity;
                $('#bookingPopover .total-value').text('$' + total);
            });

            // Handle final booking button click
            $('#bookingPopover .book-now-button').click(function() {
                // You can implement form submission or further action here
                alert('Booking confirmed!');
                $('#bookingPopover, #bookingOverlay').fadeOut(300);
            });
        });
