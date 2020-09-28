<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ClosureFibre;
use App\Cable;
use App\Splitter;


class UpdateCloFibController extends Controller
{
    public function edit($cloid, $cabid, $fibNum){

        $edclofib = new closurefibre();
        $edclofib = closurefibre::where('upstream_cable', $cabid)->where('fibre_upstream', $fibNum)->first();
        $cables = cable::where('junction_id', $cloid)->get();
        $spl = splitter::where('wp_name', $cloid)->get();

        return view('clofibres.clofibre_edit', ['edclofib' => $edclofib, 'cables'=>$cables, 'spl'=>$spl]);

    }

    public function digi_edit($id, $cabID, $fibNum){

        $edclofib = new closurefibre();
        $edclofib = closurefibre::where('upstream_cable', $cabID)->where('fibre_upstream', $fibNum)->first();
        return view('clofibres.digi_edit', ['edclofib' => $edclofib]);

    }

    public function update(Request $req, $cloID, $cabID, $fibNum){

        $upclofib = closurefibre::where('upstream_cable', $cabID)->where('fibre_upstream', $fibNum)->first();
        $upclofib->closure_id = $req->get('cloID');
        $upclofib->fibre_upstream=$req->get('fibNum');
        $upclofib->tray_number=$req->get('tNum');
        $upclofib->upstream_cable=$req->get('UpCable');
        $upclofib->downstream_cable=$req->get('DownCable');
        $upclofib->fibre_downstream=$req->get('fibDown');
        $upclofib->upstreamData=$req->get('UpData');
        $upclofib->downstreamData=$req->get('DownData');

        $upclofib->save();

        return redirect('lobby_clo/trays/'.$cloID);
    }

   public function digi_update(Request $req, $cloID, $cabID, $fibNum){

        $upclofib = closurefibre::where('upstream_cable', $cabID)->where('fibre_upstream', $fibNum)->first();
        $upclofib->closure_id = $req->get('cloID');
        $upclofib->fibre_upstream=$req->get('fibNum');
        $upclofib->tray_number=$req->get('tNum');
        $upclofib->upstream_cable=$req->get('UpCable');
        $upclofib->downstream_cable=$req->get('DownCable');
        $upclofib->fibre_downstream=$req->get('fibDown');
        $upclofib->upstreamData=$req->get('UpData');
        $upclofib->downstreamData=$req->get('DownData');

        $upclofib->save();

        $id = $req->get('cloID');
         
       return redirect('search_nfc/trays/'.$id);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
