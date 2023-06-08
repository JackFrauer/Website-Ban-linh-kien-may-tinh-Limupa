<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCode extends Model
{
    use HasFactory;
    protected $table = 'order_codes';
    protected $fillable = [
        'order_id',
        'total_price'
    ];
}
