<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetCurrentPrice extends Model {
    
    use HasFactory;

    protected $fillable = [
        'ticker',
        'price',
        'priceDate'
    ];

}
