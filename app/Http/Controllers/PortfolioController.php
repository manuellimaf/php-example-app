<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function getSummary() {
        return view('portfolio.summary', []);        
    }

    function getOperations() {
        return view('portfolio.operations', []);        
    }

}

