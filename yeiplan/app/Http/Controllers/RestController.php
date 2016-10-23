<?php

namespace App\Http\Controllers;

use App\PackagesType;
use App\ServicesType;
use Illuminate\Http\Request;

use App\Http\Requests;

class RestController extends Controller
{
    public function getCardsPackages(){
        return PackagesType::all();
    }

    public function getCardsServices(){
        return ServicesType::all();
    }
}
