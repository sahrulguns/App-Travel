<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{

    protected  $fillable = [
        'name', 'slug', 'location', 'about', 'language', 'featured_event', 'foods', 'departure_date', 'duration', 'type', 'price',
    ];

    use HasFactory;
}
