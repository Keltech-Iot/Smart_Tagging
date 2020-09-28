<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Splitter;
use App\PatchPanel;
use App\Joint_Closure;

class UpdateSplitterController extends Controller
{
    public function edit(Request $r){

        $splID = $r->splitter;
        $edspl = new splitter();
        $edspl = splitter::where('splitter_name', $splID)->first();
        return view('splitter.edit', ['edspl'=>$edspl]);
    }

    public function update(Request $req){

        $id = $req->splID;

        $upspl = splitter::where('splitter_name', $id)->first();
        $upspl->splitter_name = $req->get('splID');
        $upspl->wp_name = $req->get('wp');
        $upspl->main_exchange=$req->get('exchange');
        $upspl->type=$req->get('type');
        $upspl->fixation_point=$req->get('fixPoint');

        $upspl->save();

         $panel = patchpanel::where('panel_name', $req->get('wp'))->get();
         $clos = joint_closure::where('closure_id', $req->get('wp'))->get();

         if(count($clos) > 0){
             return redirect('lobby_clo/'.$req->get('wp'));
         }
         else if(count($panel) > 0){

            foreach($panel as $p){
                $port = $p->port_type;
            }

             return redirect('lobby/'.$req->get('wp').'/'.$port);
         }
    }

    public function digi_edit(Request $r){
        
        $splID = $r->splitter;
        $edspl = new splitter();
        $edspl = splitter::where('splitter_name', $splID)->first();
        return view('splitter.digi_edit', ['edspl'=>$edspl]);
    }

    public function digi_update(Request $req){
        $id = $req->splID;

        $upspl = splitter::where('splitter_name', $id)->first();
        $upspl->splitter_name = $req->get('splID');
        $upspl->wp_name = $req->get('wp');
        $upspl->main_exchange=$req->get('exchange');
        $upspl->type=$req->get('type');
        $upspl->fixation_point=$req->get('fixPoint');

        $upspl->save();

        return redirect('search_nfc/digi_splitter/digi_splitter_view/'.$req->get('splID'));
    }
}
