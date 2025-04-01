<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Booking;
use App\Models\WishlistItem;

class Service extends Model
{
    use HasFactory;
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function wishlistItems()
    {
        return $this->hasMany(WishlistItem::class, 'service_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function type()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }
}
