<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Booking;
use App\Models\WishlistItem;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Service extends Model
{
    use HasFactory;
    protected $casts = [
        'price' => 'decimal:2',
        'start_datetime' => 'datetime',
        'end_datetime' => 'datetime',
    ];

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

//     public function category()
//     {
//         //carefull when importing from layan check this one and test both
//         return $this->belongsTo(ServiceCategory::class, 'service_category_id');
//     }

//     public function type()
//     {

//         return $this->belongsTo(ServiceType::class, 'service_type_id');
//     }

public function serviceCategory()
{
    return $this->belongsTo(ServiceCategory::class);
}

// Define the relationship with the ServiceType model
public function serviceType()
{
    return $this->belongsTo(ServiceType::class);
}
}
