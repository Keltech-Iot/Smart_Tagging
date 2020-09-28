<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manhole;
use App\Aerial_Network;
use App\QA_WP;
use App\Work_Order;

class QA_WPController extends Controller
{
    public function index(Request $req){
        $id = $req->WP_id;
        $jobID = $req->jobID;

        $QA_id = $jobID.'.'.$id;

        $QA = qa_wp::where('QA_id', $QA_id)->get();

        if (count($QA) > 0){
            return view('QA.WP.table', ['Data'=>$QA, 'jobID'=>$jobID]);
        }
        else {
            return view('QA.WP.form', ['WP_id'=>$id, 'jobID'=>$jobID]);
        }
    }

    public function store(Request $req){
        
        $req->validate([
            'jobID'=>"required",
            'WP_id'=>"required",
            'type'=>'required',
            'digSig'=>'required',
            'AdInfo'=>'required',
            'comImg'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $CompJob = $req->file('comImg')->getClientOriginalName(); 
   
        $req->comImg->move(public_path('images/QA_WP'), $CompJob);

        $QAID = $req->get('jobID'). '.' .$req->get('WP_id');

        $QA_WP = new qa_wp([
            'job_id' => $req->get('jobID'),
            'WP_id'=>$req->get('WP_id'),
            'WP_type'=>$req->get('type'),
            'digital_sign'=>$req->get('digSig'),
            'AdInfo'=>$req->get('AdInfo'),
            'com_pic_loc'=>$CompJob,
            'QA_id'=>$QAID
         ]);

        $QA_WP->save();

        $WO = work_order::where('job_id', $req->get('jobID'))->first();
        $WO->status = "Closed";

        $WO->save();

       return redirect()->route('man_search', ['manID'=>$req->get('WP_id')]);
    }

    public function view(Request $r){
        $imgLoc = $r->loc;

        return view('QA.WP.view', ['img'=>$imgLoc]);
    }
}
