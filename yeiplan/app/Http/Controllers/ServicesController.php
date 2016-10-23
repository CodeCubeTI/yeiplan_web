<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
    public function getServices(Request $request){
        $st = $request->get('st');
        $services = Service::filterAndPaginate($st);

        return view('searcher.searcher', compact('services', 'st'));
    }
}
