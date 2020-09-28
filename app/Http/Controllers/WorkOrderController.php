<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work_Order;
use App\Joint_Closure;
use App\Manhole;
use App\aerial_network;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorkOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $WorkOrderData = work_order::get();

        $i = 0;

        if(count($WorkOrderData) > 0){
            foreach($WorkOrderData as $row){
                $i++;

                $created = strtotime($row->created_at);
                $diff = abs(time() - $created)/3600;
                $diff = $diff/24;

                $Age[$i] = number_format($diff, 2);
            }

            return view('work_orders.table', ['WorkOrderData'=>$WorkOrderData, 'Age'=>$Age]);
        }
        else{
            return view('work_orders.form');
        }
    }

    public function search(Request $r){
        $ID = $r->get('ID');
        $data = work_order::where('job_id', 'LIKE', '%'.$ID."%")->get();

        $i = 0;

        if(count($data) > 0){
            foreach($data as $row){
                $i++;

                $created = strtotime($row->created_at);
                $diff = abs(time() - $created)/3600;
                $diff = $diff/24;

                $Age[$i] = number_format($diff, 2);
            }

            return view('work_orders.table', ['WorkOrderData'=>$data, 'Age'=>$Age]);
        }
        
        else{
            return view ( 'patch_panel.patchpanel_search' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function create(){

        return view('work_orders.form');
    }

    public function pro_create(Request $r){

        $projID = $r->proj_id;

        return view('work_orders.f1', ['proj_id'=>$projID]);
    }

    public function store(request $req){

        $req->validate([
            'jobID'=>"required",
            'jobDes'=>"required",
            'projID'=>"required",
            'loc'=>"required",
            'planner'=>'required',
            'tech'=>'required',
            'cust'=>'required',
            'comType'=>'required',
            'type'=>'required',
            'proID'=>'required',
            'cert'=>'required',
            'stat'=>'required'
        ]);

        $work_order = new work_order([
            'job_id' => $req->get('jobID'),
            'jobDes'=>$req->get('jobDes'),
            'proj_id'=>$req->get('projID'),
            'location'=>$req->get('loc'),
            'planner'=>$req->get('planner'),
            'tech'=>$req->get('tech'),
            'customer'=>$req->get('cust'),
            'custNotes'=>$req->get('custNotes'),
            'component_type'=>$req->get('comType'),
            'product_type'=>$req->get('type'),
            'product_id'=>$req->get('proID'),
            'cert'=>$req->get('cert'),
            'status'=>$req->get('stat')
         ]);

        $work_order->save();

         
       return redirect('work_orders');
    }

    public function info($id){
        $info = work_order::where('job_id', $id)->get();
        $WP = "n/a"; $loc = NULL;

        foreach($info as $row){
            if($row->product_type == "Joint Closure"){
               $jc = joint_closure::where('closure_id', $row->product_id)->get();

               if(count($jc) > 0){
                   $clos = joint_closure::where('closure_id', $row->product_id)->pluck('position_id');
                   $man = manhole::where('manhole_id', $clos)->get();
                   $aer = aerial_network::where('aerial_id', $clos)->get();

                   if(count($man) > 0){
                       $loc = $man;
                       $WP = "man";
                   }
                   else if(count($aer) > 0){
                       $loc = $aer;
                       $WP = "aer";
                   }
                   else{
                        $WP = "n/a";
                   }
               }
            }

            else if($row->product_type == "Manhole"){
                $loc = manhole::where('manhole_id', $row->product_id)->get();
                $WP = "man";

                if(count($loc) == 0){
                    $WP = "n/a";
                }
            }

            else if($row->product_type == "Aerial Network"){
                $loc = aerial_network::where('aerial_id', $row->product_id)->get();
                $WP = "aer";

                if(count($loc) == 0){
                    $WP = "n/a";
                }
            }

            else{
                $loc = NULL;
            }

        }
        return view('work_orders.info', ['infoData'=>$info, 'clos'=>$loc, 'wp'=>$WP]);
    }

    public function digi(){
        $user = Auth::user();
        $WOs = work_order::where('tech', $user->name)->get();
        return view('work_orders.digi', ['user'=>$user, 'WO'=>$WOs]);
    }

    public function digi_info($id){
        $info = work_order::where('job_id', $id)->get();
        return view('work_orders.digi_info', ['infoData'=>$info]);
    }
}
