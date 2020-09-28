<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Aerial_Network;

class UpdateAerialController extends Controller
{
    public function edit($id){

        $edaerial = new aerial_network();
        $edaerial = aerial_network::where('aerial_id', $id)->first();
        return view('aerial_networks.aerial_edit', ['edaerial' => $edaerial]);

    }

    public function digi_edit($id){

        $edaerial = new aerial_network();
        $edaerial = aerial_network::where('aerial_id', $id)->first();
        return view('aerial_networks.digi_edit', ['edaerial' => $edaerial]);

    }

    public function update(Request $req, $id){

        $upaerial = aerial_network::where('aerial_id', $id)->first();
        $upaerial->aerial_id = $req->get('aerID');
        $upaerial->funct=$req->get('fun');
        $upaerial->location=$req->get('loc');
        $upaerial->lat=$req->get('lat');
        $upaerial->long=$req->get('long');

        $upaerial->save();

        return redirect('aerial_network');
    }

    public function digi_update(Request $req, $id){

        $upaerial = aerial_network::where('aerial_id', $id)->first();
        $upaerial->aerial_id = $req->get('aerID');
        $upaerial->digi_id = $req->get('digiID');
        $upaerial->funct=$req->get('fun');
        $upaerial->location=$req->get('loc');
        $upaerial->lat=$req->get('lat');
        $upaerial->long=$req->get('long');

        $upaerial->save();

        $id = $req->get('aerID');
        
        return redirect('search_nfc/aerial_net/'.$id);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
