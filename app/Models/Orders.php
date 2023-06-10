<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_name',
        'quantity',
        'price',
        'total_price'
    ];
    public function products() {
        return $this->hasMany('App\Models\Products');
    }
}
