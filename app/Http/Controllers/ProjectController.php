<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Work_Order;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(){
        $ProjectData = project::get();

        return view('projects.table', ['ProjectData'=>$ProjectData]);
    }

    public function search(Request $r){
    
        $ID = $r->get('ID');
        $data = project::where('proj_id', 'LIKE', '%'.$ID."%")->get();

        if(count($data) > 0){
            return view('projects.table', ['ProjectData'=>$data]);
        }
        else{
            return view ( 'patch_panel.patchpanel_search' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function create(){
        return  view('projects.form');
    }

    public function store(Request $req){

         $req->validate([
            'projID'=>"required",
            'projDes'=>"required",
            'loc'=>"required",
            'area'=>'required'
        ]);

        $project = new project([
            'proj_id' => $req->get('projID'),
            'proj_des'=>$req->get('projDes'),
            'location'=>$req->get('loc'),
            'area'=>$req->get('area')
         ]);

        $project->save();

         
       return redirect('projects');

    }

    public function searchWO($id){

        $WO = work_order::where('proj_id', $id)->get();

        $i = 0;

         if(count($WO) > 0){
            foreach($WO as $row){
                $i++;

                $created = strtotime($row->created_at);
                $diff = abs(time() - $created)/3600;
                $diff = $diff/24;

                $Age[$i] = number_format($diff, 2);
            }

            return view('projects.WO', ['WOData'=>$WO, 'Age'=>$Age, 'proj_id'=>$id]);
        }
        else{
            return view('projects.WO_form')->withDetails($id);
        }
    }

     public function __construct()
    {
        $this->middleware('auth');
    }
}
