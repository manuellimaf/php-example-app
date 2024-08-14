<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'asset';

    protected $fillable = [
        'ticker',
        'description',
        'asset_type'
    ];

  // Define el atributo status como un enum
    protected $casts = [
        'asset_type' => AssetType::class,
    ];
}
