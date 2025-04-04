<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
    public function services (){
        return $this->hasMany(Service::class);
    }
}
