<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceToEat extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable =[
        'name',
        'location',
        'food_type',
        'rating',
        'visited'
    ];
}
