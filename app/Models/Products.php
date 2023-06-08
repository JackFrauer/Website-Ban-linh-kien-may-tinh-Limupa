<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_id',
        'product_name',
        'price',
        'product_description',
        'product_type',
        'image',
        'images',
        'product_details',
        'mansx',
        'quantity',
        'product_year',
        'more_details'

    ];
}
