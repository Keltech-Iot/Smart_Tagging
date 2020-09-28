<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;
use App\QA_Tray;
use App\Work_Order;
use App\Joint_Closure;
use Image;


class QA_TrayController extends Controller{

   public function job($cloID){

        $WOs = work_order::where('product_type', "Joint Closure")->where('product_id', $cloID)->get();

        return view('QA.trays.jobID', ['cloID'=>$cloID], ['WorkOrders'=>$WOs]);
   }

   public function digi_job($cloID){

        $WOs = work_order::where('product_type', "Joint Closure")->where('product_id', $cloID)->get();

        return view('QA.trays.digi_job', ['cloID'=>$cloID], ['WorkOrders'=>$WOs]);
   }

   public function index(Request $r){

        $cloID = $r->cloID;

        $jobID = $r->jobID;
        $QA = $jobID.'.'.$cloID;

        $Data = qa_tray::where('QA_id', $QA)->get();

        $JC = joint_closure::where('closure_id', $cloID)->first();
        $WP = $JC->position;
        $WP_id = $JC->position_id;

        if(count($Data) > 0){
            return view('QA.trays.table', ['Data'=>$Data]);
        }
        else{
            return view('QA.trays.form', ['cloID'=>$cloID, 'jobID'=>$jobID, 'WP'=>$WP, 'WP_id'=>$WP_id]);
        }
    }

    public function digi_index(Request $r){

        $cloID = $r->cloID;

        $jobID = $r->jobID;
        $QA = $jobID.'.'.$cloID;

        $Data = qa_tray::where('QA_id', $QA)->get();
        $JC = joint_closure::where('closure_id', $cloID)->first();
        
        $WP = $JC->position;
        $WP_id = $JC->position_id;

        if(count($Data) > 0){
            return view('QA.trays.digi_table', ['Data'=>$Data]);
        }
        else{
            return view('QA.trays.digi_form', ['cloID'=>$cloID, 'jobID'=>$jobID, 'WP'=>$WP, 'WP_id'=>$WP_id]);
        }
    }
  
    
    public function create(){
        return view('QA.trays.form');
    }

    public function store(request $req){

        $req->validate([
            'jobID'=>"required",
            'manID'=>"required",
            'tNum'=>'required',
            'digSig'=>'required',
            'AdInfo'=>'required',
            'splImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'comImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $spliceTray = $req->file('splImg')->getClientOriginalName();
        $CompJob = $req->file('comImg')->getClientOriginalName(); 
   
        $req->splImg->move(public_path('images/QA_trays'), $spliceTray);
        $req->comImg->move(public_path('images/QA_trays'), $CompJob);

        $QAID = $req->get('jobID'). '.' .$req->get('cloID');

        $QA_Tray = new qa_tray([
            'job_id' => $req->get('jobID'),
            'manhole_id'=>$req->get('manID'),
            'closure_id'=>$req->cloID,
            'tray_number'=>$req->get('tNum'),
            'digital_sign'=>$req->get('digSig'),
            'AdInfo'=>$req->get('AdInfo'),
            'tray_pic_loc'=>$spliceTray,
            'com_pic_loc'=>$CompJob,
            'QA_id'=>$QAID
         ]);

        $QA_Tray->save();
        $cloID = $req->cloID;

        $WO = work_order::where('job_id', $req->get('jobID'))->first();
        $WO->status = "Closed";

        $WO->save();

       return redirect('lobby_clo/'.$cloID);
    }

    public function digi_store(request $req){

        $req->validate([
            'jobID'=>"required",
            'manID'=>"required",
            'tNum'=>'required',
            'digSig'=>'required',
            'AdInfo'=>'required',
            'splImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'comImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $spliceTray = $req->file('splImg')->getClientOriginalName();
        $CompJob = $req->file('comImg')->getClientOriginalName(); 
   
        $req->splImg->move(public_path('images/QA_trays'), $spliceTray);
        $req->comImg->move(public_path('images/QA_trays'), $CompJob);

        $QAID = $req->get('jobID'). '.' .$req->get('cloID');

        $QA_Tray = new qa_tray([
            'job_id' => $req->get('jobID'),
            'manhole_id'=>$req->get('manID'),
            'closure_id'=>$req->cloID,
            'tray_number'=>$req->get('tNum'),
            'digital_sign'=>$req->get('digSig'),
            'AdInfo'=>$req->get('AdInfo'),
            'tray_pic_loc'=>$spliceTray,
            'com_pic_loc'=>$CompJob,
            'QA_id'=>$QAID
         ]);

        $QA_Tray->save();
        $cloID = $req->cloID;

        $WO = work_order::where('job_id', $req->get('jobID'))->first();
        $WO->status = "Closed";

        $WO->save();

       return redirect('search_nfc/QA_trays/'.$cloID);
    }

    public function viewImg(Request $req){

        $loc = $req->loc;

        return view('QA.trays.view', ['Imgloc'=>$loc]);
    }

    public function digi_viewImg(Request $req){

        $loc = $req->loc;

        return view('QA.trays.digi_view', ['Imgloc'=>$loc]);
    }
}

