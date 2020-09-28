<?php

namespace App\Http\Controllers;
use App\QA_Tray;
use App\QA_Panel;
use App\patchpanel;
use App\Joint_Closure;
use App\Manhole;
use App\aerial_network;
use App\QA_WP;

use Illuminate\Http\Request;

class QA_SearchController extends Controller
{
    public function index(Request $r){
        $jobID = $r->jID;
        $proID = $r->ID;

        $qaID = $jobID.'.'.$proID; 

        $panel = patchpanel::where('panel_id', $proID)->get();
        $clos = joint_closure::where('closure_id', $proID)->get();
        $man = manhole::where('manhole_id', $proID)->get();
        $aer = aerial_network::where('aerial_id', $proID)->get();

        if(count($panel) > 0){
            $qa = qa_panel::where('QA_id', $qaID)->get();
            return view('QA.panels.table', ['Data'=>$qa]);
        }
        else if(count($clos) > 0){
            $qa = qa_tray::where('QA_id', $qaID)->get();
            return view('QA.trays.table', ['Data'=>$qa]);
        }
        else if(count($man) > 0 || count($aer) > 0){
            $qa = qa_wp::where('QA_id', $qaID)->get();
            return view('QA.WP.table', ['Data'=>$qa]);
        }

    }
}
