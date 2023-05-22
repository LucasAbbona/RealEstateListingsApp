<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'location',
        'size',
        'rooms',
        'features',
        'information',
        'broker_id',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'price',
        'listingtype'
    ];
}
