<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aerial_Network;
use Illuminate\Support\Fascades\DB;
use App\Http\Controllers\Controller;

class AerialNetController extends Controller
{
    public function index(){
        $Data = aerial_network::get();
        return view('aerial_networks.aerial_table', ['AerialData'=>$Data]);
    }

     public function create(){

        $aerial = new aerial_network();
        return view('aerial_networks.aerial_form', compact($aerial));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(request $req){

        $req->validate([
            'aerID'=>"required",
            'digiID'=>"required",
            'fun'=>"required",
            'loc'=>"required",
            'lat'=>'required',
            'lng'=>'required'
        ]);

        $aerial = new aerial_network([
            'aerial_id' => $req->get('aerID'),
            'digi_id'=>$req->get('digiID'),
            'funct'=>$req->get('fun'),
            'location'=>$req->get('loc'),
            'lat'=>$req->get('lat'),
            'long'=>$req->get('lng')
         ]);

        $aerial->save();

         
       return redirect('aerial_network');
    }

    public function digi_store(request $req){

        $req->validate([
            'aerID'=>"required",
            'digiID'=>"required",
            'fun'=>"required",
            'loc'=>"required",
            'lat'=>'required',
            'lng'=>'required'
        ]);

        $aerial = new aerial_network([
            'aerial_id' => $req->get('aerID'),
            'digi_id' => $req->get('digiID'),
            'funct'=>$req->get('fun'),
            'location'=>$req->get('loc'),
            'lat'=>$req->get('lat'),
            'long'=>$req->get('lng')
         ]);

        $aerial->save();

        $id = $req->get('aerID');
         
       return redirect('search_nfc/aerial_net/'.$id);
    }

    public function search_id($id){
        $aerialNet = aerial_network::where ( 'aerial_id', $id)->get ();

        if(count($aerialNet) > 0){
             return view ( 'aerial_networks.aerial_search', ['aerialNet'=>$aerialNet] );
        }
        else{
            return view('aerial_networks.aerial_form', ['id'=>$id]);
        }
    }

    public function digi_search_id($id){
        $aerialNet = aerial_network::where ( 'aerial_id', $id)->get ();

        if(count($aerialNet) > 0){
             return view ( 'aerial_networks.digi_AN', ['aerialNet'=>$aerialNet] );
        }
        else{
            return view('aerial_networks.digi_form', ['id'=>$id]);
        }
    }

    public function search(Request $r){

        $aerID = $r->get('ID');
        $data = aerial_network::where('aerial_id', 'LIKE', '%'.$aerID."%")->get();

        if(count($data) > 0){
            return view('aerial_networks.aerial_table', ['AerialData'=>$data]);
        }
        else{
            return view ( 'patch_panel.patchpanel_search' )->withMessage ( 'No Details found. Try to search again !' );
        }
    }
}
