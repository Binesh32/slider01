<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomePageController extends Controller
{

    function index(){
        $data = DB::table('slider')->get();

        $package = DB::table('package')
        ->select(\DB::raw('MIN(package_room_type.price) AS min_price, package.name, package.slug'))
        ->join('package_room_type', 'package_room_type.package_id', '=', 'package.id', 'INNER')
        ->groupBy('package.id')
        ->get();

        return view('pages.frontend.index', compact('data', 'package'));
    }

    function packageDetailIndex($package_slug){
        $package = DB::table('package')
        ->where('slug', $package_slug)->first();

        $services = DB::table('package_services')
        ->join('service', 'service.id', '=', 'package_services.service_id', 'LEFT')
        ->where('package_id', $package->id)->get();

        $roomType = DB::table('package_room_type')
        ->join('room_type', 'room_type.id', '=', 'package_room_type.room_type_id', 'LEFT')
        ->where('package_id', $package->id)->get();

        dd($services);

    }
}
