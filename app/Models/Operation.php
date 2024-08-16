<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table = 'operation';
    public $timestamps = false;

    protected $fillable = [
        'ticker',
        'quantity',
        'operation_type',
        'buy_price',
        'buy_date',
        'sell_price',
        'sell_date',
        'tax',
    ];

}
