<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;
use App\QA_Panel;
use App\PatchPanel;
use App\Work_Order;
use Image;

class QA_PanelController extends Controller{

   public function job(Request $req){

        $pID = $req->pID;
        $WOs = work_order::where('product_type', "Patch Panel")->where('product_id', $pID)->get();

        return view('QA.panels.jobID', ['pID'=>$pID], ['WorkOrders'=>$WOs]);
   }

   public function index(Request $r){

        $pID = $r->panID;
        $jobID = $r->jobID;
        
        $QA = $jobID.'.'.$pID;

        $Data = qa_panel::where('QA_id', $QA)->get();

        if(count($Data) > 0){
            return view('QA.panels.table', ['Data'=>$Data]);
        }
        else{
            return view('QA.panels.form', ['pID'=>$pID, 'jobID'=>$jobID]);
        }
    }

   public function digi_index(Request $r){

        $pID = $r->panID;
        $jobID = $r->jobID;
        
        $QA = $jobID.'.'.$pID;

        $Data = qa_panel::where('QA_id', $QA)->get();

        if(count($Data) > 0){
            return view('QA.panels.digi_QA', ['Data'=>$Data]);
        }
        else{
            return view('QA.panels.digi_form', ['pID'=>$pID, 'jobID'=>$jobID]);
        }
    }
  
    
    public function create(){
        return view('QA.panels.form');
    }

    public function store(request $req){

        $req->validate([
            'jobID'=>"required",
            'pID'=>"required",
            'pNum'=>'required',
            'digSig'=>'required',
            'AdInfo'=>'required',
            'termImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'comImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $Term = $req->file('termImg')->getClientOriginalName();
        $CompJob = $req->file('comImg')->getClientOriginalName(); 
   
        $req->termImg->move(public_path('images/QA_panels'), $Term);
        $req->comImg->move(public_path('images/QA_panels'), $CompJob);

        $QAID = $req->get('jobID'). '.' .$req->get('pID');

        $QA_Panel = new qa_panel([
            'job_id' => $req->get('jobID'),
            'panel_id'=>$req->get('pID'),
            'port_number'=>$req->get('pNum'),
            'digital_sign'=>$req->get('digSig'),
            'AdInfo'=>$req->get('AdInfo'),
            'terminal_pic_loc'=>$Term,
            'com_pic_loc'=>$CompJob,
            'QA_id'=>$QAID
         ]);

        $QA_Panel->save();

        $pID = $req->pID;
        $panel = patchpanel::where('panel_id', $pID)->get();
        $port = $panel->port_type;

        $WO = work_order::where('job_id', $req->get('jobID'))->first();
        $WO->status = "Closed";

        $WO->save();

       return redirect('lobby/'.$pID.'/'.$port);
    }

    public function digi_store(request $req){

        $req->validate([
            'jobID'=>"required",
            'pID'=>"required",
            'pNum'=>'required',
            'digSig'=>'required',
            'AdInfo'=>'required',
            'termImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'comImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $Term = $req->file('termImg')->getClientOriginalName();
        $CompJob = $req->file('comImg')->getClientOriginalName(); 
   
        $req->termImg->move(public_path('images/QA_panels'), $Term);
        $req->comImg->move(public_path('images/QA_panels'), $CompJob);

        $QAID = $req->get('jobID'). '.' .$req->get('pID');

        $QA_Panel = new qa_panel([
            'job_id' => $req->get('jobID'),
            'panel_id'=>$req->get('pID'),
            'port_number'=>$req->get('pNum'),
            'digital_sign'=>$req->get('digSig'),
            'AdInfo'=>$req->get('AdInfo'),
            'terminal_pic_loc'=>$Term,
            'com_pic_loc'=>$CompJob,
            'QA_id'=>$QAID
         ]);

        $QA_Panel->save();
        $cloID = $req->cloID;

        $pID = $req->pID;

        $WO = work_order::where('job_id', $req->get('jobID'))->first();
        $WO->status = "Closed";

        $WO->save();

        $panel = $req->get('pID');

       return redirect('search_nfc/digi_QA/'.$panel);
    }

    public function viewImg(Request $req){

        $loc = $req->loc;

        return view('QA.panels.view', ['Imgloc'=>$loc]);
    }

    public function digi_job($pID){

        $WOs = work_order::where('product_type', "Patch Panel")->where('product_id', $pID)->get();

        return view('QA.panels.digi_WO', ['pID'=>$pID], ['WorkOrders'=>$WOs]);
   }
}
