<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manhole;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;

class ManholeController extends Controller
{
    public function index(){
        $Data = manhole::get();
        return view('manholes.manhole_table', ['ManholeData'=>$Data]);
    }

    public function search(Request $r){
        $ID = $r->get('ID');
        $data = manhole::where('manhole_id', 'LIKE', '%'.$ID."%")->get();

        if(count($data) > 0){
            return view('manholes.manhole_table', ['ManholeData'=>$data]);
        }
        else{
            return view ( 'patch_panel.patchpanel_search' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }

     public function create(){

        $man = new manhole();
        return view('manholes.manhole_form', compact($man));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(request $req){

        $req->validate([
            'manID'=>"required",
            'digiID'=>"required",
            'fun'=>"required",
            'type'=>"required",
            'loc'=>"required",
            'lat'=>'required',
            'lng'=>'required'
        ]);

        $manhole = new manhole([
            'manhole_id' => $req->get('manID'),
            'digi_id' => $req->get('digiID'),
            'funct'=>$req->get('fun'),
            'type'=>$req->get('type'),
            'location'=>$req->get('loc'),
            'lat'=>$req->get('lat'),
            'long'=>$req->get('lng')
         ]);

        $manhole->save();
        $manID = $req->get('manID');
         
       return redirect()->route('man_search', ['manID'=>$manID]);
    }

    public function digi_store(request $req){

        $req->validate([
            'manID'=>"required",
            'digiID'=>"required",
            'fun'=>"required",
            'type'=>"required",
            'loc'=>"required",
            'lat'=>'required',
            'lng'=>'required'
        ]);

        $manhole = new manhole([
            'manhole_id' => $req->get('manID'),
            'digi_id' => $req->get('digiID'),
            'funct'=>$req->get('fun'),
            'type'=>$req->get('type'),
            'location'=>$req->get('loc'),
            'lat'=>$req->get('lat'),
            'long'=>$req->get('lng')
         ]);

        $manhole->save();

        $id = $req->get('manID');

       return redirect('search_nfc/digi_manhole/'.$id);
    }

    public function search_id($id){
        $manhole = manhole::where ( 'manhole_id', $id)->get ();

        if(count($manhole) > 0 ){
            return view ( 'manholes.manhole_search', ['manhole'=>$manhole] );
        }
        else{
            return view('manholes.f1', ['id'=>$id]);
        }
    }

    public function digi_search_id($id){
        $manhole = manhole::where ( 'manhole_id', $id)->get ();

        if(count($manhole) > 0 ){
            return view ( 'manholes.digi_search', ['manhole'=>$manhole] );
        }
        else{
            return view('manholes.digi_form');
        }
    }
}
