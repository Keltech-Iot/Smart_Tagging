<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Joint_Closure;
use Validator, Redirect;

class UpdateClosureController extends Controller
{
    public function edit($id){

        $edclo = new joint_closure();
        $edclo = joint_closure::where('closure_id', $id)->first();
        return view('fibre_closures.closure_edit', ['edclo' => $edclo]);

    }

    public function digi_edit($id){

        $edclo = new joint_closure();
        $edclo = joint_closure::where('closure_id', $id)->first();
        return view('fibre_closures.digi_edit', ['edclo' => $edclo]);

    }

    public function update(Request $req, $id){

        $uppanel = joint_closure::where('closure_id', $id)->first();
        $uppanel->closure_id = $req->get('cloID');
        $uppanel->type=$req->get('cloType');
        $uppanel->position_id=$req->get('posID');
        $uppanel->position=$req->get('pos');
        $uppanel->nfc=$req->get('DigiID');

        $uppanel->save();

        return redirect('fibre_closure');
    }

    public function digi_update(Request $req, $id){

        $uppanel = joint_closure::where('closure_id', $id)->first();
        $uppanel->closure_id = $req->get('cloID');
        $uppanel->type=$req->get('cloType');
        $uppanel->position_id=$req->get('posID');
        $uppanel->position=$req->get('pos');
        $uppanel->nfc=$req->get('DigiID');

        $uppanel->save();

        $tag = $req->get('DigiID');

        return redirect('search_nfc/'.$tag);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
