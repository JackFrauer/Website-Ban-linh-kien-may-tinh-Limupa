<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $table='manufacturer';
    protected $fillable = [
        'manufacturer_name',
        'manufacturer_code'
    ];
}
