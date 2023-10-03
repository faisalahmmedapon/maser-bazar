<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'name',
        'slug',
        'email',
        'phone',
        'address',
        'photo',
        'status',
    ];

//    public function getCreatedAtAttribute($date)
//    {
//        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d H:i');
//    }
//
//    public function getUpdatedAtAttribute($date)
//    {
//        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d H:i');
//    }
}
