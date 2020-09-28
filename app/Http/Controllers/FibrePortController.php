<?php
namespace App\Http\Controllers;

Use App\fibreport;
Use App\Cable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\DB;

class FibrePortController extends Controller
{
    public function getData(){
        $FibrePortData = fibreport::get();
        return view('fibreports.fibreports_table', ['FibrePortData' => $FibrePortData]);
    }
    public function create(){

        $fp = new fibreport();
        return view('fibreports.fibreports_form', compact($fp));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(request $req){

        $req->validate([
            'poID'=>"required",
            'fbName'=>"required",
            'pID'=>"required",
            'cblID'=>"required",
            'custRef'=>"required",
            'cInfo'=>"required",
            'funct'=>"required",
            'Bwidth'=>"required"
        ]);
        
        $fp = new fibreport([
            'port_id' => $req->get('poID'),
            'fibre_name'=>$req->get('fbName'),
            'cable_id'=>$req->get('cblID'),
            'panel_id'=>$req->get('pID'),
            'customer_ref'=>$req->get('custRef'),
            'circuit_info'=>$req->get('cInfo'),
            'function'=>$req->get('funct'),
            'bandwidth'=>$req->get('Bwidth')
         ]);

        $fp->save();

        $panel = $req->get('pID');
        $fib = $req->get('poID');
         
       return redirect('lobby/'.$panel.'/info/fibreport_panel_search/'.$fib);
    }

     public function search_pID($pid, Request $fNum)
    {
        $panelID = $pid;
        $search = $fNum->get('fibre_num');

        $fibre = fibreport::where('port_id', $search)->where('panel_id', $panelID)->get();
        $cable = cable::where('junction_id',  $panelID)->get();

        if (count ( $fibre ) > 0){
            return view ( 'fibreports.fibreports_panelsearch', ['fibre'=>$fibre]);
        }
        else{
            return view ( 'fibreports.fibreports_form', ['search'=>$search, 'panelID'=> $panelID, 'cables'=>$cable] );
        }
       
    }

    public function search_cID(Request $request)
    {
        $search = $request->get ( "cID" );		
        $ports = fibreport::where ( 'cable_id', $search)->get ();
        if (count ( $ports ) > 0){
            return view ( 'fibreports.fibreports_cablesearch' )->withDetails ( $ports )->withQuery ( $search );
        }
        else{
            return view ( 'fibreports.fibreports_cablesearch' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }
    public function search_panel_ID($id)
    {		
        $ports = fibreport::where ( 'panel_id', $id)->get ();
        if (count ( $ports ) > 0){
            return view ( 'fibreports.fibreports_panelsearch' )->withDetails ( $ports );
        }
        else{
            return view ( 'fibreports.fibreports_panelsearch' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function search_cust(Request $req){

        $search = $req->get ( "cust_ref" );		
        $fibre = fibreport::where ( 'customer_ref', $search)->get ();
        if (count ( $fibre ) > 0){
            return view ( 'fibreports.fibreports_panelsearch', ['fibre'=>$fibre]);
        }
        else{
            return view ( 'home' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function search_fibre($pid, $fNum)
    {
        $panelID = $pid;
        $search = $fNum;

        $fibre = fibreport::where('port_id', $search)->where('panel_id', $panelID)->get();
        $cable = cable::where('junction_id',  $panelID)->get();

        if (count ( $fibre ) > 0){
            return view ( 'fibreports.fibreports_panelsearch', ['fibre'=>$fibre]);
        }
        else{
            return view ( 'fibreports.fibreports_form', ['search'=>$search, 'panelID'=> $panelID, 'cables'=>$cable]);
        }
       
    }


    public function digi_search(Request $req){
        $panelID = $req->pID;
        $search = $req->portNum;

        $fibre = fibreport::where('port_id', $search)->where('panel_id', $panelID)->get();

        if (count ( $fibre ) > 0){
            return view ( 'fibreports.digi_search', ['fibre'=>$fibre]);
        }
        else{
            return view ( 'fibreports.digi_form', ['search'=>$search], ['panelID'=> $panelID] );
        }
    }

    public function digi_store(request $req){

        $req->validate([
            'poID'=>"required",
            'fbName'=>"required",
            'pID'=>"required",
            'cblID'=>"required",
            'custRef'=>"required",
            'cInfo'=>"required",
            'funct'=>"required",
            'Bwidth'=>"required"
        ]);
        
        $fp = new fibreport([
            'port_id' => $req->get('poID'),
            'fibre_name'=>$req->get('fbName'),
            'cable_id'=>$req->get('cblID'),
            'panel_id'=>$req->get('pID'),
            'customer_ref'=>$req->get('custRef'),
            'circuit_info'=>$req->get('cInfo'),
            'function'=>$req->get('funct'),
            'bandwidth'=>$req->get('Bwidth')
         ]);

        $fp->save();

        $fNum = $req->get('poID');
        $pID = $req->get('pID');
         
       return redirect('patchpanel_mob/'.$pID);
    }
}
