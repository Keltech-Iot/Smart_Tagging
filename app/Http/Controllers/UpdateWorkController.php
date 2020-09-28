<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work_Order;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;

class UpdateWorkController extends Controller
{
    public function edit($id){

        $edwork = new work_order();
        $edwork = work_order::where('job_id', $id)->first();
        return view('work_orders.edit', ['edwork' => $edwork]);

    }

    public function update(Request $req, $id){

        $upwork = work_order::where('job_id', $id)->first();
        $upwork->job_id = $req->get('jobID');
        $upwork->jobDes=$req->get('jobDes');
        $upwork->proj_id=$req->get('projID');
        $upwork->location=$req->get('loc');
        $upwork->planner=$req->get('planner');
        $upwork->tech=$req->get('tech');
        $upwork->customer=$req->get('cust');
        $upwork->custNotes=$req->get('custNotes');
        $upwork->component_type=$req->get('comType');
        $upwork->cert=$req->get('cert');
        $upwork->status=$req->get('stat');
        $upwork->product_id=$req->get('proID');
        $upwork->product_type=$req->get('type');

        $upwork->save();

        return redirect('work_orders');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
