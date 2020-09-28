<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClosureFibre;
use App\Cable;
use App\Splitter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fascades\DB;

class CloFibreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($cloID, $cabID, Request $req){
        $fibNum = $req->get('fibre_num');
        $cloFib = closurefibre::where('fibre_upstream', $fibNum)->where('upstream_cable', $cabID)->get();
        $cables = cable::where('junction_id', $cloID)->get();
        $spl = splitter::where('wp_name', $cloID)->get();

        if( count($cloFib) > 0){
            return view ('clofibres.clofibre_view', ['cloFib'=>$cloFib]);
        }
        else{
            return view('clofibres.clofibre_form', ['cabID'=>$cabID, 'cloID'=>$cloID, 'fibre_num'=>$fibNum, 'cables'=>$cables]);
        }
        
    }

    public function digi_index($cloID, $cabID, Request $req){
        $fibNum = $req->get('fibre_num');
        $cloFib = closurefibre::where('fibre_upstream', $fibNum)->where('upstream_cable', $cabID)->get();

        if( count($cloFib) > 0){
            return view ('clofibres.digi_clofibre_view', ['cloFib'=>$cloFib]);
        }
        else{
            return view('clofibres.digi_clofibre_form', ['cabID'=>$cabID, 'cloID'=>$cloID, 'fibre_num'=>$fibNum]);
        }
        
    }

    public function create(){
        $cloFib = new closurefibre();
        return view('clofibres.clofibre_form', compact($cloFib));
    }

    public function store(request $req){

        $req->validate([
            'cloID'=>"required",
            'tNum'=>"required",
            'UpCable'=>"required",
            'DownCable'=>"required",
            'FibUp'=>"required",
            'UpData'=>"required",
            'DownFib'=>"required",
            'DownData'=>"required"
        ]);

        $closFib = new closurefibre([
            'closure_id' => $req->get('cloID'),
            'tray_number'=>$req->get('tNum'),
            'upstream_cable'=>$req->get('UpCable'),
            'downstream_cable'=>$req->get('DownCable'),
            'fibre_upstream'=>$req->get('FibUp'),
            'fibre_downstream'=>$req->get('DownFib'),
            'upstreamData'=>$req->get('UpData'),
            'downstreamData'=>$req->get('DownData')
         ]);

        $closFib->save();

        $cloID = $req->get('cloID');
         
       return redirect('lobby_clo/trays/'.$cloID);
    }

    public function digi_store(request $req){

       $req->validate([
            'cloID'=>"required",
            'tNum'=>"required",
            'UpCable'=>"required",
            'DownCable'=>"required",
            'FibUp'=>"required",
            'UpData'=>"required",
            'DownFib'=>"required",
            'DownData'=>"required"
        ]);

        $closFib = new closurefibre([
            'closure_id' => $req->get('cloID'),
            'tray_number'=>$req->get('tNum'),
            'upstream_cable'=>$req->get('UpCable'),
            'downstream_cable'=>$req->get('DownCable'),
            'fibre_upstream'=>$req->get('FibUp'),
            'fibre_downstream'=>$req->get('DownFib'),
            'upstreamData'=>$req->get('UpData'),
            'downstreamData'=>$req->get('DownData')
         ]);

        $closFib->save();

        $id = $req->get('cloID');
         
       return redirect('search_nfc/trays/'.$id);
    }
}
