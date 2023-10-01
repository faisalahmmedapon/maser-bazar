<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierSellFish extends Model
{
    use HasFactory;

    public function customer_name(){
        return $this->hasOne(Customer::class,'id','customer_name');
    }

}
