<?php

namespace App\Http\Controllers;

use App\PackagesType;
use App\Service;
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

    public function getServices($type){
        if($type == "Express"){
            $services = Service::select('service_name','stock', 'services.price','image_service_url','services.description_short','services.description')
                ->where('package_name', '=', $type)
                ->join('servicespackages','services.id', '=', 'servicespackages.service_id')
                ->join('packages','servicespackages.package_id', '=', 'packages.id')
                ->get();
            return $services;
        }
        $services = Service::select('service_name','stock', 'price','image_service_url','description_short','description')
            ->where('name_type', '=', $type)
            ->join('servicestypes','servicestype_id', '=', 'servicestypes.id')->get();
        return $services;
    }

    public function getPackages($type){
        $services = Service::select('service_name','stock', 'services.price','image_service_url','services.description_short','services.description')
            ->where('package_name', '=', $type)
            ->join('servicespackages','services.id', '=', 'servicespackages.service_id')
            ->join('packages','servicespackages.package_id', '=', 'packages.id')
            ->get();
        return $services;
    }


}
