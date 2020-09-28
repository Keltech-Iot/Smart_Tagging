<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Splitter;
use App\Joint_Closure;
use App\PatchPanel;


class SplitterController extends Controller
{
    public function create($cloID){
        return view('splitter.form', ['cloID'=>$cloID]);
    }

    public function store(request $req){

        $req->validate([
            'splID'=>"required",
            'exchange'=>"required",
            'type'=>"required",
            'wp'=>"required",
            'fixPoint'=>'required'
        ]);

        $splitter = new splitter([
            'splitter_name' => $req->get('splID'),
            'main_exchange' => $req->get('exchange'),
            'type'=>$req->get('type'),
            'wp_name'=>$req->get('wp'),
            'fixation_point'=>$req->get('fixPoint'),
         ]);

         $splitter->save();

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

    public function digi_store(request $req){

        $req->validate([
            'splID'=>"required",
            'exchange'=>"required",
            'type'=>"required",
            'wp'=>"required",
            'fixPoint'=>'required'
        ]);

        $splitter = new splitter([
            'splitter_name' => $req->get('splID'),
            'main_exchange' => $req->get('exchange'),
            'type'=>$req->get('type'),
            'wp_name'=>$req->get('wp'),
            'fixation_point'=>$req->get('fixPoint'),
         ]);

         $splitter->save();
         
       return redirect('search_nfc/digi_splitter/'.$req->get('wp'));
    }

    public function digi_index($id){

        $splitters = splitter::where('wp_name', $id)->get();

        return view('splitter.digi_table', ['splitter'=>$splitters, 'WP'=>$id]);
    }

    public function digi_create($id){
        return view('splitter.digi_form', ['WP'=>$id]);
    }

    public function digi_view($id){
        $splitter = splitter::where('splitter_name', $id)->first();
        return view('splitter.digi_view', ['spl'=>$splitter]);
    }
}
