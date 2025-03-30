<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Service;

class ServiceType extends Model
{
    public function services (){
        return $this->hasMany(Service::class);
    }
}
