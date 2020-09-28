<?php

namespace App\Http\Controllers;

Use App\Cable;
use App\PatchPanel;
use App\Joint_Closure;
use App\Manhole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\DB;
use Spatie\Searchable\Search;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;

class CableController extends Controller
{
    public function getData(){

      $CableData = cable::get();
      return view('cables.cable_table', ['CableData' => $CableData]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function create(Request $r){

        $product = $r->jun;
        $id = $r->jID;

        return view('cables.cable_form', ['product'=>$product, 'proID'=>$id]);
    }

    public function store(request $req){

        $req->validate([
            'cID'=>"required",
            'jID'=>"required",
            'DigiID'=>"required",
            'cblType1'=>"required",
            'cblType2'=>"required",
            'fbType'=>"required",
            'funct'=>"required",
            'cblStat'=>"required",
            'upData'=>"required",
            'downData'=>"required"
        ]);

        $cType = $req->get('cblType1').'/'.$req->get('cblType2');

        $c = new cable([
            'cable_id' => $req->get('cID'),
            'junction_id'=>$req->get('jID'),
            'upstream_info'=>$req->get('upData'),
            'downstream_info'=>$req->get('downData'),
            'nfc_id'=>$req->get('DigiID'),
            'cable_type'=>$cType,
            'fibre_type'=>$req->get('fbType'),
            'function'=>$req->get('funct'),
            'status'=>$req->get('cblStat')
         ]);

        $c->save();

        $jID = $req->get('jID');

       return redirect()->route('cables_odf', ['pnlID'=>$jID]);
    }

    public function digi_store(request $req){

        $req->validate([
            'cID'=>"required",
            'jID'=>"required",
            'DigiID'=>"required",
            'cblType1'=>"required",
            'cblType2'=>"required",
            'fbType'=>"required",
            'funct'=>"required",
            'cblStat'=>"required",
            'upData'=>"required",
            'downData'=>"required"
        ]);
        
        $cType = $req->get('cblType1').'/'.$req->get('cblType2');

        $c = new cable([
            'cable_id' => $req->get('cID'),
            'junction_id'=>$req->get('jID'),
            'upstream_info'=>$req->get('upData'),
            'downstream_info'=>$req->get('downData'),
            'nfc_id'=>$req->get('DigiID'),
            'cable_type'=>$cType,
            'fibre_type'=>$req->get('fbType'),
            'function'=>$req->get('funct'),
            'status'=>$req->get('cblStat')
         ]);

        $c->save();

        $cID = $req->get('cID');

       return redirect('digi_search_cable/'.$cID);
    }

  public function search_pID(Request $request)
  {
    $search = $request->get ( "pID" );		
    $cables = cable::where ( 'junction_id', $search)->get ();
    if (count ( $cables ) > 0){
        return view ( 'cables.cable_search' )->withDetails ( $cables )->withQuery ( $search );
    }
    else{
        return view ( 'cables.cable_search' )->withMessage ( 'No Details found. Try to search again !' );
    }
  }

  public function search_cID(Request $request)
  {
    $search = $request->get ( "cID" );		
    $cables = cable::where ( 'cable_id', $search)->get ();
    if (count ( $cables ) > 0){
        return view ( 'cables.cable_search' )->withDetails ( $cables )->withQuery ( $search );
    }
    else{
        return view ( 'cables.cable_search' )->withMessage ( 'No Details found. Try to search again !' );
    }
  }

  public function search_panel_ID (Request $id)
  {
    $cables = cable::where ('junction_id', $id->pnlID)->get ();

    $jID = $id->pnlID;

    $panel = patchpanel::where('panel_name', $jID)->get();
    $clos = joint_closure::where('closure_id', $jID)->get();
    $man = manhole::where('manhole_id', $jID)->get();

    if(count($panel) > 0){
        $junct = "Patch Panel";
    }
    else if(count($clos) > 0){
        $junct = "Joint Closure";
    }
    else if(count($man) > 0){
        $junct = "Manhole";
    }
    else{
        $junct = "Debug";
    }

    return view('cables.cable_search', ['cables'=>$cables, 'jID'=>$jID, 'jun'=>$junct]);
  }

   public function search_closure_ID  ($id)
  {
    $cables = cable::where ('junction_id', $id)->get ();

    $jID = $id;
    $junct = "Joint Closure";
    
    return view('cables.cable_search', ['cables'=>$cables, 'jID'=>$id, 'jun'=>$junct]);
  }

  public function search_manhole_ID  ($id)
  {
    $cables = cable::where ('junction_id', $id)->get ();

    $jID = $id;
    $junct = "Manhole";
    
    return view('cables.cable_search', ['cables'=>$cables, 'jID'=>$id, 'jun'=>$junct]);
  }

  public function digi($id){

    $cables = cable::where ('junction_id', $id)->get ();
    return view('cables.digi_search', compact('cables'));
  }

  public function digi_pSearch($id){

    $cables = cable::where ('junction_id', $id)->get ();
    return view('cables.digi_search', compact('cables'));
  }

  public function digi_info($id){

    $cables = cable::where ('cable_id', $id)->first ();

    $panel = patchpanel::where('panel_name', $cables->junction_id)->get();
    $clo = joint_closure::where('closure_id', $cables->junction_id)->get();

    if (count($panel) > 0){
        $junct = "ODF";
    }
    else if(count($clo) > 0){
        $junct ="Joint Closure";
    }
    else
        $junct = "Work Point";

    return view('cables.nfc', ['info'=>$cables, 'junct'=>$junct]);
  }
}


