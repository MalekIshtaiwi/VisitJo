
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
        });
