<?php

namespace App\Http\Controllers;

Use App\patchpanel;
Use App\cable;
Use App\joint_closure;
Use App\manhole;
Use App\aerial_network;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\DB;

class NfcController extends Controller
{
    public function index(){
        return view('nfc');
    }

    public function search($nfc){

        $panel = patchpanel::where('nfc', $nfc)->get();
        $cable = cable::where('nfc_id', $nfc)->get();
        $closure = joint_closure::where('nfc', $nfc)->get();
        $manhole = manhole::where('digi_id', $nfc)->get();
        $aerial = aerial_network::where('digi_id', $nfc)->get();

        if (count($panel) > 0){
            return view('patch_panel.digi_search')->withDetails($panel);
        }
        else if (count($cable) > 0){
            return view('cables.nfc', ['info'=>$cable]);
        }
        else if (count($closure) > 0){
            return view('fibre_closures.nfc_search')->withDetails($closure);
        }
        else if (count($manhole) > 0){
            return view('manholes.digi_search', ['manhole'=>$manhole]);
        }
        else if (count($aerial) > 0){
            return view('aerial_networks.AN', ['aerialNet'=>$aerial]);
        }
        else{
            return view('nfc', ['digiID'=>$nfc]);
        }
    }

    public function CloLob($id){
        $cloID = $id;

        return view('digi_lobby_clo', ['cloID'=>$cloID]);
    }

    public function AddNew(Request $r){
        $prod = $r->get('type');
        $digiID = $r->digiID;

        if($prod == "Patch Panel"){
            return view('patch_panel.digi_form', ['id'=>$digiID]);
        }
        if($prod == "Cable"){
            return view('cables.digi_form', ['id'=>$digiID]);
        }
        if($prod == "Joint Closure"){
            return view('fibre_closures.digi_form', ['id'=>$digiID]);
        }
        if($prod == "Manhole"){
            return view('manholes.digi_form')->withDetails($digiID);
        }
        if($prod == "Aerial Network"){
            return view('aerial_networks.digi_form')->withDetails($digiID);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}

