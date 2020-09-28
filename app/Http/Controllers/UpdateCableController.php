<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cable;
use Validator, Redirect;

class UpdateCableController extends Controller
{

    public function edit($cid){

        $edcable = new cable();
        $edcable = cable::where('cable_id', $cid)->first();
        return view('cables.cable_edit', ['edcable' => $edcable]);

    }

    public function digi_edit($cid){

        $edcable = new cable();
        $edcable = cable::where('cable_id', $cid)->first();
        return view('cables.digi_edit', ['edcable' => $edcable]);

    }

    public function edit1($pid, $cid){

        $edcable = new cable();
        $edcable = cable::where('cable_id', $cid)->first();
        return view('cables.cable_edit', ['edcable' => $edcable]);

    }

    public function update(Request $req, $cid){

        $cType = $req->get('cblType1').'/'.$req->get('cblType2');

        $upcable = cable::where('cable_id', $cid)->first();
        $upcable->cable_id = $req->get('cID');
        $upcable->nfc_id=$req->get('DigiID');
        $upcable->junction_id=$req->get('jID');
        $upcable->upstream_info=$req->get('upData');
        $upcable->downstream_info=$req->get('downData');
        $upcable->cable_type=$cType;
        $upcable->fibre_type=$req->get('fType');
        $upcable->function=$req->get('ft');
        $upcable->status=$req->get('Cstat');

        $upcable->save();

        $jID = $req->get('jID');

       return redirect('lobby/'.$jID.'/cables');
    }

    
    public function update1(Request $req, $pid, $cid){
    
        $cType = $req->get('cblType1').'/'.$req->get('cblType2');

        $upcable = cable::where('cable_id', $cid)->first();
        $upcable->cable_id = $req->get('cID');
        $upcable->nfc_id=$req->get('DigiID');
        $upcable->junction_id=$req->get('jID');
        $upcable->upstream_info=$req->get('upData');
        $upcable->downstream_info=$req->get('downData');
        $upcable->cable_type=$cType;
        $upcable->fibre_type=$req->get('fType');
        $upcable->function=$req->get('ft');
        $upcable->status=$req->get('Cstat');

        $upcable->save();

        $jID = $req->get('jID');

       return redirect('lobby/'.$jID.'/cables');
    }
    
    public function digi_update(Request $req, $cid){
    
        $cType = $req->get('cblType1').'/'.$req->get('cblType2');

        $upcable = cable::where('cable_id', $cid)->first();
        $upcable->cable_id = $req->get('cID');
        $upcable->nfc_id=$req->get('DigiID');
        $upcable->junction_id=$req->get('jID');
        $upcable->upstream_info=$req->get('upData');
        $upcable->downstream_info=$req->get('downData');
        $upcable->cable_type=$cType;
        $upcable->fibre_type=$req->get('fType');
        $upcable->function=$req->get('ft');
        $upcable->status=$req->get('Cstat');

        $upcable->save();

        $cID = $req->get('cID');

       return redirect('digi_search_cable/'.$cID);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
