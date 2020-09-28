<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\FibrePort;
use App\Cable;
use Validator, Redirect;

class UpdatePortsController extends Controller{

    public function edit($pid, $fID){

        $edport = new fibreport();
        $edport = fibreport::where('port_id', $fID)->where('panel_id', $pid)->first();
        $cable = cable::where('junction_id', $pid)->get();

        return view('fibreports.fibreports_edit', ['edport' => $edport, 'cables'=>$cable]);

    }

    public function digi_edit(Request $req){

        $pid = $req->pID;
        $fID = $req->fNum;

        $edport = new fibreport();
        $edport = fibreport::where('port_id', $fID)->where('panel_id', $pid)->first();
        return view('fibreports.digi_edit', ['edport' => $edport]);

    }


    public function update(Request $req, $pid, $fID){

        $upport = fibreport::where('port_id', $fID)->where('panel_id', $pid)->first();
        $upport->port_id = $req->get('poID');
        $upport->fibre_name=$req->get('fbName');
        $upport->panel_id=$req->get('pID');
        $upport->cable_id=$req->get('cblID');
        $upport->circuit_info=$req->get('cInfo');
        $upport->function=$req->get('funct');
        $upport->customer_ref=$req->get('custRef');
        $upport->bandwidth=$req->get('Bwidth');

        $upport->save();

        $port = $req->get('poID');

        return redirect('lobby/'.$pid.'/info/fibreport_panel_search/'.$fID);
    }

    public function update_digi(Request $req, $pid, $fID){

        $upport = fibreport::where('port_id', $fID)->where('panel_id', $pid)->first();
        $upport->port_id = $req->get('poID');
        $upport->fibre_name=$req->get('fbName');
        $upport->panel_id=$req->get('pID');
        $upport->cable_id=$req->get('cblID');
        $upport->circuit_info=$req->get('cInfo');
        $upport->function=$req->get('funct');
        $upport->customer_ref=$req->get('custRef');
        $upport->bandwidth=$req->get('Bwidth');

        $upport->save();

        return redirect('patchpanel_mob/'.$pid);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
