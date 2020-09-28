<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatchPanel;
use App\Cable;
use App\Joint_Closure;
use App\ClosureFibre;
use App\Work_Order;
use App\FibrePort;
use App\Manhole;
use App\Aerial_Network;
use App\Splitter;

class LobbyController extends Controller
{
    public function index($id, $port){
        $pnlID = $id;
        $pType = $port;

        $cable = cable::where('junction_id', $id)->get();
        $fibres = fibreport::where('panel_id', $id)->get();
        $WOs = work_order::where('product_id', $id)->get();
        $splitter = splitter::where('wp_name', $id)->get();

        $DigiID = patchpanel::where('panel_name', $id)->pluck('nfc');

        $type = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach($cable as $c){
            switch($c->fibre_type){
                case "4 Fibre":
                $type[1] ++;
                break;
                case "8 Fibre":
                $type[2] ++;
                break;
                case "16 Fibre":
                $type[3]++;
                break;
                case "24 Fibre":
                $type[4]++;
                break;
                case "48 Fibre":
                $type[5]++;
                break;
                case "96 Fibre":
                $type[6]++;
                break;
                case "144 Fibre":
                $type[7]++;
                break;
                case "288 Fibre":
                $type[8]++;
                break;
                default:
                $type[9] ++;
                break;
            }
        }
        $count = count($cable);
        
        $Fibact = 0; $Fibres = 0; $Fibdis = 0; $Fibav = 0;

        foreach($fibres as $f){
            switch($f->function){
                case "Active":
                $Fibact ++;
                break;
                case "Reserved":
                $Fibres ++;
                break;
                case "Disabled":
                $Fibdis++;
                break;
                default:
                $Fibav ++;
                break;
            }
        }

        if($pType == "Quad"){
            $remain = 96 - count($fibres);
            $pType = "96 Fibre";
        }
        else{
            $remain = 48 - count($fibres);
            $pType = "48 Fibre";
        }

        return view('lobby', ['pType'=>$pType, 'pid'=>$pnlID, 'count'=>$count, 'type'=>$type, 'splitter'=>$splitter,
                    'remain'=>$remain, 'Fibact'=>$Fibact, 'Fibres'=>$Fibres, 'Fibdis'=>$Fibdis, 'WO'=>$WOs, 'digiID'=>$DigiID]);
    }

    public function clo($cid){
        $cloID = $cid;
        $check = 0;
        $closure = joint_closure::where('closure_id', $cloID)->first();

        $exchange = $closure->exchange;

        $cable = cable::where('junction_id', $cloID)->get();
        $fibres = closurefibre::where('closure_id', $cloID)->get();
        $WOs = work_order::where('product_id', $cloID)->get();
        $splitter = splitter::where('wp_name', $cloID)->get();

        $wpID = joint_closure::where('closure_id', $cid)->pluck('position_id');
        $man = manhole::where('manhole_id', $wpID)->first();
        $aer = aerial_network::where('aerial_id', $wpID)->first();

        if ($aer != NULL){
            $man = $aer;
        }

        $DigiID = joint_closure::where('closure_id', $cid)->pluck('nfc');

        $type = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach($cable as $c){
            switch($c->fibre_type){
                case "2 Fibre":
                $type[1] ++;
                break;
                case "4 Fibre":
                $type[2] ++;
                break;
                case "8 Fibre":
                $type[3]++;
                break;
                case "16 Fibre":
                $type[4]++;
                break;
                case "24 Fibre":
                $type[5]++;
                break;
                case "48 Fibre":
                $type[6]++;
                break;
                case "72 Fibre":
                $type[7]++;
                break;
                case "96 Fibre":
                $type[8]++;
                break;
                case "144 Fibre":
                $type[9]++;
                break;
                case "288 Fibre":
                $type[10]++;
                break;
                default:
                $type[11] ++;
                break;
            }
        }
        $count = count($cable);

        $NumFibres = count($fibres);

        $totFib = (2 * $type[1]) + (4 * $type[2]) + (8 * $type[3]) + (16 * $type[4]) + (24 * $type[5]) + (48 * $type[6]) + (72 * $type[7])
                   + (96 * $type[8]) + (144 * $type[9]) + (288 * $type[10]);

        $remain = $totFib - $NumFibres;
        
        if($man != NULL){
            $check = 1;
        }

        return view('lobby_clo', ['cloID'=>$cloID, 'count'=>$count, 'type'=>$type, 'numFib'=>$NumFibres,
                    'remain'=>$remain, 'WOs'=>$WOs, 'digiID'=>$DigiID, 'man'=>$man, 'check'=>$check, 'exchange'=>$exchange, 'splitter'=>$splitter]);
    }

    public function man(Request $req){

        $id = $req->manID;

        $man = manhole::where('manhole_id', $id)->first();
        $clos = joint_closure::where('position_id', $id)->get();
        $cable = cable::where('junction_id', $id)->get();
        $wo = work_order::where('product_id', $id)->get();

        $type = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach($cable as $c){
            switch($c->fibre_type){
                case "2 Fibre":
                $type[1] ++;
                break;
                case "4 Fibre":
                $type[2] ++;
                break;
                case "8 Fibre":
                $type[3]++;
                break;
                case "16 Fibre":
                $type[4]++;
                break;
                case "24 Fibre":
                $type[5]++;
                break;
                case "48 Fibre":
                $type[6]++;
                break;
                case "72 Fibre":
                $type[7]++;
                break;
                case "96 Fibre":
                $type[8]++;
                break;
                case "144 Fibre":
                $type[9]++;
                break;
                case "288 Fibre":
                $type[10]++;
                break;
                default:
                $type[11] ++;
                break;
            }
        }
        $count = count($cable);

        return view('lobby_man', ['man'=>$man, 'type'=>$type, 'count'=>$count, 'WOs'=>$wo, 'clos'=>$clos]);
    }

    public function aerial(Request $req){

        $id = $req->aer_id;

        $aer = aerial_network::where('aerial_id', $id)->first();
        $clos = joint_closure::where('position_id', $id)->get();
        $cable = cable::where('junction_id', $id)->get();
        $wo = work_order::where('product_id', $id)->get();

        $type = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach($cable as $c){
            switch($c->fibre_type){
                case "2 Fibre":
                $type[1] ++;
                break;
                case "4 Fibre":
                $type[2] ++;
                break;
                case "8 Fibre":
                $type[3]++;
                break;
                case "16 Fibre":
                $type[4]++;
                break;
                case "24 Fibre":
                $type[5]++;
                break;
                case "48 Fibre":
                $type[6]++;
                break;
                case "72 Fibre":
                $type[7]++;
                break;
                case "96 Fibre":
                $type[8]++;
                break;
                case "144 Fibre":
                $type[9]++;
                break;
                case "288 Fibre":
                $type[10]++;
                break;
                default:
                $type[11] ++;
                break;
            }
        }
        $count = count($cable);

        return view('lobby_aerial', ['aer'=>$aer, 'type'=>$type, 'count'=>$count, 'WOs'=>$wo, 'clos'=>$clos]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
