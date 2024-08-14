<?php

namespace App\Models;

enum AssetType: String
{
    case PUBLIC_DEBT = 'Bond';
    case PRIVATE_DEBT = 'ON';
    case STOCK = 'Stock';
}
