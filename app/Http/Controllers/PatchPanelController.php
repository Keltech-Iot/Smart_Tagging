<?php

namespace App\Http\Controllers;

Use App\PatchPanel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\DB;
use Validator, Redirect;

class PatchPanelController extends Controller
{
    public function getData(){
        $PatchPanelData = patchpanel::get();
        return view('patch_panel.patchpanel_table', ['PatchPanelData' => $PatchPanelData]);
    }

    public function create(){

        $panel = new patchpanel();
        return view('patch_panel.patchpanel_form', compact($panel));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(request $req){

        $req->validate([
            'pnlName'=>"required",
            'stat'=>"required",
            'poType'=>"required",
            'location'=>"required",
            'screen'=>"required"
        ]);

        $panel = new patchpanel([
            'panel_name'=>$req->get('pnlName'),
            'nfc'=>$req->get('DigiID'),
            'status'=>$req->get('stat'),
            'location'=>$req->get('location'),
            'port_type'=>$req->get('poType'),
            'Screen_disp'=>$req->get('screen')
         ]);

        $panel->save();

         
       return redirect('patchpanel');
    }

    public function digi_store(request $req){
        $Id = $req->get('DigiID');
        
        $req->validate([
            'pnlName'=>"required",
            'stat'=>"required",
            'poType'=>"required",
            'location'=>"required",
            'screen'=>"required"
        ]);

        $panel = new patchpanel([
            'panel_name'=>$req->get('pnlName'),
            'nfc'=>$req->get('DigiID'),
            'status'=>$req->get('stat'),
            'location'=>$req->get('location'),
            'port_type'=>$req->get('poType'),
            'Screen_disp'=>$req->get('screen')
         ]);

        $panel->save();

         
       return redirect('search_nfc/'.$Id);
    }

    public function search_ID(Request $request)
    {
        $search = $request->get ( "ID" );		
        $panels = patchpanel::where ( 'panel_name', 'LIKE', '%'.$search."%")->get ();
        if (count ( $panels ) > 0){
            return view ( 'patch_panel.patchpanel_table', ['PatchPanelData'=>$panels] );
        }
        else{
            return view ( 'patch_panel.patchpanel_search' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function search_panelID($panelID)
    {
        $search = $panelID;		
        $panels = patchpanel::where ( 'panel_name', $search)->get ();
        if (count ( $panels ) > 0){
            return view ( 'patch_panel.patchpanel_search' )->withDetails ( $panels )->withQuery ( $search );
        }
        else{
            return view ( 'patch_panel.patchpanel_form' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

    public function mob_search($panelID)
    {
        $search = $panelID;		
        $panels = patchpanel::where ( 'panel_name', $search)->get ();
        if (count ( $panels ) > 0){
            return view ( 'patch_panel.digi_search' )->withDetails ( $panels )->withQuery ( $search );
        }
        else{
            return view ( 'patch_panel.digi_form', ['id'=>$search] );
        }
    }

    public function digi_search(Request $id){
        $pid = $id->pID;

        $panels = patchpanel::where ( 'panel_name', $pid)->get ();
        if (count ( $panels ) > 0){
            return view ( 'patch_panel.digi_search' )->withDetails ( $panels );
        }
        else{
            return view ( 'patch_panel.digi_form', ['id'=>$pid] );
        }
    }

}
