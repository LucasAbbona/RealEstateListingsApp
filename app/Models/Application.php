<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable= [
        'broker_id',
        'listing_id',
        'conditions',
        'offer',
        'policies',
        'name',
        'email',
        'phone'
    ];
}
