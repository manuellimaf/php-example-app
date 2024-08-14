<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Asset;
use App\Models\AssetCurrentPrice;
use App\Models\Operation;

class PortfolioController extends Controller
{
    function getSummary() {
        $assets = Asset::all();
        foreach($assets as $asset) {
            $assetType = $asset->asset_type->value;
            
            $price = AssetCurrentPrice::firstWhere('ticker', $asset->ticker);
            Log::debug(<<<EOT
                        [$assetType] $asset->ticker: $$price->price
                        EOT);

        }

        return view('portfolio.summary');
    }

    function getOperations() {
        $operations = Operation::all();

        foreach($operations as $op) {
            Log::debug($op);
        }

        return view('portfolio.operations');
    }

}

