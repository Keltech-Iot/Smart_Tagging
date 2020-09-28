<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        return view ('map');
    }

    public function pin($lat, $lng, $manID){
         return view ('map', ['lat'=>$lat, 'lng'=>$lng, 'manID'=>$manID]);
    }

    public function digi_pin($lat, $lng, $manID){
         return view ('digi_map', ['lat'=>$lat, 'lng'=>$lng, 'manID'=>$manID]);
    }

    public function aerial(Request $req){
        $lat = $req->lat;
        $lng = $req->lng;
        $aerID = $req->id;

         return view ('map_aerial', ['lat'=>$lat, 'lng'=>$lng, 'aerID'=>$aerID]);
    }

    public function digi_aerial(Request $req){
        $lat = $req->lat;
        $lng = $req->lng;
        $aerID = $req->id;

         return view ('digi_map_aerial', ['lat'=>$lat, 'lng'=>$lng, 'aerID'=>$aerID]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
