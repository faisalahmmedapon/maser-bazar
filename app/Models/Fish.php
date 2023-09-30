<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $fillable =             [
        'name',
        'weight',
        'rate',
        'amount',
        'slug',
    ];
}