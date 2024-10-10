<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceToEat extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'location',
        'food_type',
        'rating',
        'visited'
    ];
}
