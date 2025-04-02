<x-layout>


<!-- Profile Content Section -->
<x-slot name="view_profile_css">
<style>
    :root {
        --primary: #92400b;
        --primary-dark: #793509;
        --secondary: #b85c38;
        --accent: #e09132;
    }

    .profile-header {
        padding: 20px 0;
        background-color: white;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        margin-bottom: 0;
    }

    .profile-img {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-name {
        color: #333;
        margin-bottom: 0;
        font-weight: 600;
    }

    .profile-email {
        color: #666;
        margin-bottom: 0;
    }

    .btn-edit {
        background-color: var(--primary);
        color: white;
        border: none;
    }

    .btn-edit:hover {
        background-color: var(--primary-dark);
        color: white;
    }

    .booking-section {
        padding: 20px 0;
        background-color: #fff9f3;
    }

    .booking-history {
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .booking-card {
        border: 1px solid rgba(0,0,0,0.1);
        border-radius: 8px;
        margin-bottom: 15px;
        background-color: white;
    }

    .booking-title {
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 5px;
    }

    .booking-date {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .booking-status {
        display: inline-block;
        background-color: #e2f5e9;
        color: #28a745;
        padding: 2px 10px;
        border-radius: 12px;
        font-size: 0.8rem;
    }

    .booking-price {
        color: var(--secondary);
        font-weight: 600;
        font-size: 1.2rem;
    }
</style>
<x-slot name="view_profile_css">

<div class="container">
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="row align-items-center">
            <div class="col">
                <div class="d-flex align-items-center">
                    <img src="profile-placeholder.jpg" alt="Profile Image" class="profile-img mr-3">
                    <div>
                        <h3 class="profile-name">{{ $user->name }}</h3>
                        <p class="profile-email">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-edit">Edit Profile</button>
            </div>
        </div>
    </div>

<!-- Booking History Section -->
<div class="booking-section">
    <h4 class="booking-history">Booking History</h4>

    @forelse($bookings as $booking)
        <div class="booking-card p-3">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="booking-title">{{ $booking->service->name }}</h5>
                    <p class="booking-date">
                        @if($booking->service->start_datetime && $booking->service->end_datetime)
                            {{ \Carbon\Carbon::parse($booking->service->start_datetime)->format('F d') }}-{{ \Carbon\Carbon::parse($booking->service->end_datetime)->format('d, Y') }}
                        @else
                            {{ $booking->created_at->format('F d, Y') }}
                        @endif
                    </p>
                    <span class="booking-status">{{ ucfirst($booking->status) }}</span>
                </div>
                <div class="col-auto">
                    <span class="booking-price">${{ number_format($booking->price_at_booking, 2) }}</span>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">You don't have any bookings yet.</div>
    @endforelse
</div>
</div>

</x-layout>
