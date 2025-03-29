<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Review;
use app\Models\Booking;
use app\Models\WishlistItem;

class Service extends Model
{
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    public function wishlistItems(){
        return $this->hasMany(WishlistItem::class , 'service_id' ,'id');
    }
}
