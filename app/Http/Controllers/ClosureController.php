<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joint_Closure;
use App\Aerial_Network;
use App\Manhole;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;


class ClosureController extends Controller
{
    public function index(){
        $Data = joint_closure::get();
        return view('fibre_closures.fibre_closure_table', ['ClosureData'=>$Data]);
    }

    public function search(Request $r){
        $ID = $r->get('ID');
        $data = joint_closure::where('closure_id', 'LIKE', '%'.$ID."%")->get();

        if(count($data) > 0){
            return view('fibre_closures.fibre_closure_table', ['ClosureData'=>$data]);
        }
        else{
            return view ( 'patch_panel.patchpanel_search' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $closure = new joint_closure();
        return view('fibre_closures.closure_form', compact($closure));
    }

    public function store(request $req){

        $req->validate([
            'cloID'=>"required",
            'DigiID'=>"required",
            'exchange'=>"required",
            'cloType'=>"required",
            'pos'=>"required",
            'posID'=>"required"
        ]);

        $closure = new joint_closure([
            'closure_id' => $req->get('cloID'),
            'nfc'=>$req->get('DigiID'),
            'exchange'=>$req->get('exchange'),
            'type'=>$req->get('cloType'),
            'position'=>$req->get('pos'),
            'position_id'=>$req->get('posID')
         ]);

        $closure->save();

        $pos = $req->get('posID');
         
       return redirect('clo_search/'.$pos);
    }
    

    public function digi_store(request $req){

        $req->validate([
            'cloID'=>"required",
            'DigiID'=>"required",
            'exchange'=>"required",
            'cloType'=>"required",
            'pos'=>"required",
            'posID'=>"required"
        ]);

        $closure = new joint_closure([
            'closure_id' => $req->get('cloID'),
            'nfc'=>$req->get('DigiID'),
            'exchange'=>$req->get('exchange'),
            'type'=>$req->get('cloType'),
            'position'=>$req->get('pos'),
            'position_id'=>$req->get('posID')
         ]);

        $closure->save();

        $id = $req->get('DigiID');
         
       return redirect('search_nfc/'.$id);
    }

    public function search_closure_ID($id)
    {		
        $clos = joint_closure::where ( 'position_id', $id)->get ();
        $c = joint_closure::where ( 'position_id', $id)->first();

        if (count ( $clos ) > 0){
            $man = manhole::where('manhole_id', $id)->get();
            $aer = aerial_network::where('aerial_id', $id)->get();

            if(count($man) > 0){
                $WP = "Manhole";
                return view ( 'fibre_closures.closure_search', ['clos'=>$clos, 'ID'=>$id, 'WP'=>$WP]);
            }
            else if(count($aer) > 0){
                $WP = "Aerial Network";
                return view ( 'fibre_closures.closure_search', ['clos'=>$clos, 'ID'=>$id, 'WP'=>$WP]);
            }
            else{
                $WP = $c->position;
                return view('fibre_closures.closure_search', ['clos'=>$clos, 'ID'=>$id, 'WP'=>$WP]);
            }
        }

        else{
            $man = manhole::where('manhole_id', $id)->get();
            $aer = aerial_network::where('aerial_id', $id)->get();

            if(count($man) > 0){
                return view ( 'fibre_closures.man_form', ['ManId'=>$id] );
            }
            else if(count($aer) > 0){
                return view('fibre_closures.aer_form', ['AerID'=>$id]);
            }
            else{
                return view('fibre_closures.closure_form');
            }
        }
    }

    public function WOsearch_closure_ID($id)
    {		
        $clos = joint_closure::where ( 'closure_id', $id)->get ();
        if (count ( $clos ) > 0){
            return view ( 'fibre_closures.WO_search', ['clos'=>$clos, 'cloID'=>$id]);
        }
        else{
            return view ( 'fibre_closures.WO_form', ['cloID'=>$id]);
        }
    }

    public function digi_search(Request $req){

        $id = $req->cloID;

        $clos = joint_closure::where ( 'closure_id', $id)->get ();
        if (count ( $clos ) > 0){
            return view ( 'fibre_closures.nfc_search' )->withDetails ( $clos );
        }
        else{
            return view ( 'fibre_closures.digi_f1', ['id'=>$clos] );
        } 
    }
}
