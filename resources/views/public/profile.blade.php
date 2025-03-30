<x-layout>
    <head>
        <style>
            body {
                background-color: #f8f9fa;
            }

            .page-title {
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }

            .page-title strong {
                font-weight: 700;
            }

            .subtitle {
                font-weight: 300;
                display: inline;
            }

            .profile-card {
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0,0,0,0.05);
                overflow: hidden;
                margin-bottom: 30px;
            }

            .profile-header {
                background-color: #f5f5f5;
                padding: 30px;
                text-align: center;
            }

            .profile-avatar {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                border: 5px solid #fff;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                margin-bottom: 15px;
            }

            .profile-content {
                padding: 30px;
            }

            .info-label {
                font-weight: 600;
                color: #666;
            }

            .section-title {
                font-size: 1.5rem;
                margin-bottom: 1.2rem;
                border-bottom: 1px solid #eee;
                padding-bottom: 10px;
            }

            .card {
                border-radius: 0;
                border-left: none;
                border-right: none;
                margin-bottom: 0;
            }

            .card-header {
                background-color: #fff;
                border-bottom: 1px solid rgba(0,0,0,.125);
                padding: 0;
            }

            .btn-link {
                color: #000;
                text-decoration: none;
                width: 100%;
                text-align: left;
                padding: 0.75rem 1.25rem;
                position: relative;
                font-weight: 400;
            }

            .btn-link:hover, .btn-link:focus {
                text-decoration: none;
                color: #000;
            }

            .plus-icon, .minus-icon {
                width: 24px;
                height: 24px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
                position: absolute;
                right: 1.25rem;
                top: 50%;
                transform: translateY(-50%);
            }

            .plus-icon {
                background-color: #8bc34a;
            }

            .minus-icon {
                background-color: #f44336;
            }

            .purchase-item {
                border-bottom: 1px solid #eee;
                padding: 15px 0;
            }

            .purchase-item:last-child {
                border-bottom: none;
            }

            .purchase-date {
                color: #666;
                font-size: 0.9rem;
            }

            .purchase-status {
                font-size: 0.85rem;
                font-weight: 500;
                padding: 3px 10px;
                border-radius: 20px;
            }

            .status-completed {
                background-color: #e8f5e9;
                color: #2e7d32;
            }

            .status-processing {
                background-color: #fffde7;
                color: #f57f17;
            }

            .status-cancelled {
                background-color: #ffebee;
                color: #c62828;
            }

            .nav-tabs {
                border-bottom: 1px solid #eee;
            }

            .nav-tabs .nav-link {
                border: none;
                color: #666;
                font-weight: 500;
                padding: 15px 20px;
            }

            .nav-tabs .nav-link.active {
                color: #000;
                background-color: transparent;
                border-bottom: 2px solid #8bc34a;
            }

            .tab-content {
                padding: 30px 0 0;
            }
            /* Edit Profile Modal Styles */
  .edit-profile-pic {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #8bc34a;
  }

  .profile-pic-wrapper {
    display: inline-block;
    position: relative;
  }

  .profile-pic-container {
    position: relative;
    display: inline-block;
    cursor: pointer;
  }

  .profile-pic-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .profile-pic-container:hover .profile-pic-overlay {
    opacity: 1;
  }

  .profile-pic-overlay i {
    font-size: 24px;
    margin-bottom: 5px;
  }

  .modal-content {
    border-radius: 10px;
    border: none;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
  }

  .modal-header {
    border-bottom: 1px solid #f0f0f0;
    padding: 20px 25px;
  }

  .modal-body {
    padding: 25px;
  }

  .modal-footer {
    border-top: 1px solid #f0f0f0;
    padding: 20px 25px;
  }

  .form-control {
    border-radius: 4px;
    padding: 10px 15px;
    border: 1px solid #e0e0e0;
  }

  .form-control:focus {
    border-color: #8bc34a;
    box-shadow: 0 0 0 0.2rem rgba(139, 195, 74, 0.25);
  }

  .btn-primary {
    background-color: #8bc34a;
    border-color: #8bc34a;
  }

  .btn-primary:hover, .btn-primary:focus {
    background-color: #7cb342;
    border-color: #7cb342;
  }
  /* change password styling*/
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #8bc34a;
    background-color: #8bc34a;
  }

  .custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(139, 195, 74, 0.25);
  }

  /* Ensure the custom checkbox appears properly */
  .custom-control-label::before,
  .custom-control-label::after {
    top: 0.25rem;
  }
        </style>
    </head>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p class="text-muted mb-4">MY ACCOUNT</p>
                <h1 class="page-title"><strong>Profile</strong> <span class="subtitle">& Purchase History</span></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="profile-card">
                    <div class="profile-header">
                        <img src="https://via.placeholder.com/150" alt="Profile Avatar" class="profile-avatar">
                        <h4 class="mb-0">Jane Bookworm</h4>
                        <p class="text-muted">Member since Jan 2020</p>
                    </div>
                    <div class="profile-content">
                        <div class="mb-4">
                            <p class="info-label mb-1">Email</p>
                            <p>jane.bookworm@example.com</p>
                        </div>
                        <div class="mb-4">
                            <p class="info-label mb-1">Location</p>
                            <p>Bookmarksgrove, Alphabet Village</p>
                        </div>
                        <div>
                            <p class="info-label mb-1">Phone</p>
                            <p>+1 (555) 123-4567</p>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-outline-secondary btn-sm btn-block" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body p-0">
                        <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="true">Purchase History</a>
                            </li>
                        </ul>
                        <div class="tab-content p-4" id="profileTabsContent">
                            <div class="tab-pane fade show active" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                                <h5 class="section-title">Purchase History</h5>

                                <div id="purchaseAccordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOrder1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOrder1" aria-expanded="true" aria-controls="collapseOrder1">
                                                    Order #ORD12345 - $129.99

                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOrder1" class="collapse show" aria-labelledby="headingOrder1" data-parent="#purchaseAccordion">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="purchase-date">March 15, 2025</span>
                                                    <span class="purchase-status status-completed">Completed</span>
                                                </div>
                                                <div class="purchase-item d-flex align-items-center">
                                                    <div class="mr-3">
                                                        <img src="https://via.placeholder.com/60" alt="Product" class="img-fluid" width="60">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">The Far Side of the Italic Mountains</h6>
                                                        <p class="mb-0 text-muted">Qty: 1 × $79.99</p>
                                                    </div>
                                                </div>
                                                <div class="purchase-item d-flex align-items-center">
                                                    <div class="mr-3">
                                                        <img src="https://via.placeholder.com/60" alt="Product" class="img-fluid" width="60">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">A Guide to Bookmarksgrove</h6>
                                                        <p class="mb-0 text-muted">Qty: 1 × $50.00</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-sm btn-outline-secondary mr-2">Track Order</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Download Invoice</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOrder2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOrder2" aria-expanded="false" aria-controls="collapseOrder2">
                                                    Order #ORD12344 - $65.50

                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOrder2" class="collapse" aria-labelledby="headingOrder2" data-parent="#purchaseAccordion">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="purchase-date">February 28, 2025</span>
                                                    <span class="purchase-status status-processing">Processing</span>
                                                </div>
                                                <div class="purchase-item d-flex align-items-center">
                                                    <div class="mr-3">
                                                        <img src="https://via.placeholder.com/60" alt="Product" class="img-fluid" width="60">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">Subline Road Travel Guide</h6>
                                                        <p class="mb-0 text-muted">Qty: 1 × $65.50</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-sm btn-outline-secondary mr-2">Track Order</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Contact Support</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOrder3">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOrder3" aria-expanded="false" aria-controls="collapseOrder3">
                                                    Order #ORD12343 - $175.25

                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOrder3" class="collapse" aria-labelledby="headingOrder3" data-parent="#purchaseAccordion">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="purchase-date">January 15, 2025</span>
                                                    <span class="purchase-status status-cancelled">Cancelled</span>
                                                </div>
                                                <div class="purchase-item d-flex align-items-center">
                                                    <div class="mr-3">
                                                        <img src="https://via.placeholder.com/60" alt="Product" class="img-fluid" width="60">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">The Line Lane Collection</h6>
                                                        <p class="mb-0 text-muted">Qty: 1 × $175.25</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-sm btn-outline-secondary">View Details</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfileModalLabel"><strong>Edit</strong> Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editProfileForm">
            <!-- Profile Picture Upload -->
            <div class="form-group text-center mb-4">
              <div class="profile-pic-wrapper">
                <div class="profile-pic-container">
                  <img src="https://via.placeholder.com/150" alt="Profile Picture" class="edit-profile-pic" id="profileImagePreview">
                  <div class="profile-pic-overlay">
                    <i class="fa fa-camera"></i>
                    <span>Change Photo</span>
                  </div>
                </div>
              </div>
              <input type="file" id="profileImageUpload" class="d-none" accept="image/*">
              <label for="profileImageUpload" class="btn btn-sm btn-outline-secondary mt-2">Upload Image</label>
            </div>

            <!-- Name Fields -->
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name" value="Jane">
              </div>
              <div class="form-group col-md-6">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter last name" value="Bookworm">
              </div>
            </div>

            <!-- Email -->
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" value="jane.bookworm@example.com">
            </div>

            <!-- Phone -->
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" value="+1 (555) 123-4567">
            </div>

            <!-- Location -->
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" id="location" placeholder="Enter location" value="Bookmarksgrove, Alphabet Village">
            </div>

            <!-- Bio -->
            <div class="form-group">
              <label for="bio">Bio</label>
              <textarea class="form-control" id="bio" rows="3" placeholder="Tell us about yourself">An avid reader and explorer from the Italic Mountains. Loves to travel and read along the Line Lane.</textarea>
            </div>

            <!-- Password Change Section with Toggle -->
            <div class="form-group">
                <div class="custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="custom-control-input" id="changePassword">
                  <label class="custom-control-label" for="changePassword">Change Password</label>
                </div>
                <div id="passwordFields" style="display: none;">
                  <div class="form-group">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="newPassword">New Password</label>
                      <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="confirmPassword">Confirm Password</label>
                      <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>


    <!-- Custom JavaScript for toggling icons -->
    <script>
        $(document).ready(function(){
            $('.btn-link').click(function(){
                var isCollapsed = $(this).hasClass('collapsed');

                if(isCollapsed) {
                    $(this).find('.plus-icon')
                        .removeClass('plus-icon')
                        .addClass('minus-icon')
                        .text('-');
                } else {
                    $(this).find('.minus-icon')
                        .removeClass('minus-icon')
                        .addClass('plus-icon')
                        .text('+');
                }
            });
        });
        $(document).ready(function() {
    // Toggle password change fields
    $(document).ready(function() {
    // Toggle password change fields
    $('#changePassword').on('change', function() {
      if($(this).is(':checked')) {
        $('#passwordFields').slideDown();
      } else {
        $('#passwordFields').slideUp();
      }
    });
  });


    // Profile image preview
    $('#profileImageUpload').change(function() {
      if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#profileImagePreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
      }
    });
  });
    </script>
</x-layout>
