<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Manhole;

class UpdateManholeController extends Controller
{
    public function edit($id){

        $edman = new manhole();
        $edman = manhole::where('manhole_id', $id)->first();
        return view('manholes.manhole_edit', ['edman' => $edman]);

    }

    public function digi_edit($id){

        $edman = new manhole();
        $edman = manhole::where('manhole_id', $id)->first();
        return view('manholes.digi_edit', ['edman' => $edman]);

    }

    public function update(Request $req, $id){

        $upman = manhole::where('manhole_id', $id)->first();
        $upman->manhole_id = $req->get('manID');
        $upman->digi_id = $req->get('digiID');
        $upman->funct=$req->get('fun');
        $upman->type=$req->get('type');
        $upman->location=$req->get('loc');
        $upman->lat=$req->get('lat');
        $upman->long=$req->get('long');

        $upman->save();

        return redirect('manhole');
    }

    public function digi_update(Request $req, $id){

        $upman = manhole::where('manhole_id', $id)->first();
        $upman->manhole_id = $req->get('manID');
        $upman->digi_id = $req->get('digiID');
        $upman->funct=$req->get('fun');
        $upman->type=$req->get('type');
        $upman->location=$req->get('loc');
        $upman->lat=$req->get('lat');
        $upman->long=$req->get('long');

        $upman->save();

        $man = $req->get('manID');

        return redirect('search_nfc/digi_manhole/'.$man);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
