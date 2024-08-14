<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Asset;
use App\Models\Operation;

class PortfolioController extends Controller
{
    function getSummary() {
        $asset = Asset::firstWhere('ticker', 'VIST');
        $assetType = $asset->asset_type->value;
        
        Log::debug(<<<EOT
                    Asset found:  [$assetType] $asset->ticker ($asset->description)
                    EOT);

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

