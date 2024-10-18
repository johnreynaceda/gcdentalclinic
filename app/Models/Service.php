<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function serviceCategory(){
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceSelecteds(){
        return $this->hasMany(service_selected::class);
    }
}
