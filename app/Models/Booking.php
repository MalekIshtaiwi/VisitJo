<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'quantity',
        'date',
        'time',
        'status',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // This should also be defined
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
