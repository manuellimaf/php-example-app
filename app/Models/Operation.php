<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table = 'operation';

    protected $fillable = [
        'ticker',
        'quantity',
        'operationType',
        'buyPrice',
        'buyDate',
        'sellPrice',
        'sellDate',
        'tax',
    ];

}
