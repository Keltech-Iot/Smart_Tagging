<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PatchPanel;
use App\Cable;

class UpdatePanelController extends Controller
{

    public function edit($id){

        $edpanel = new patchpanel();
        $edpanel = patchpanel::where('panel_name', $id)->first();
        return view('patch_panel.patchpanel_edit', ['edpanel' => $edpanel]);

    }

    public function digi_edit($id){

        $edpanel = new patchpanel();
        $edpanel = patchpanel::where('panel_name', $id)->first();
        return view('patch_panel.digi_edit', ['edpanel' => $edpanel]);

    }

    public function update(Request $req, $id){

        $uppanel = patchpanel::where('panel_name', $id)->first();
        $uppanel->panel_name=$req->get('pName');
        $uppanel->nfc=$req->get('DigiID');
        $uppanel->status=$req->get('pStat');
        $uppanel->location=$req->get('pLoc');
        $uppanel->port_type=$req->get('poType');
        $uppanel->Screen_disp=$req->get('pScreen');

        $uppanel->save();

        return redirect('patchpanel');
    }

    public function digi_update(Request $req, $id){

        $uppanel = patchpanel::where('panel_name', $id)->first();
        $uppanel->panel_name=$req->get('pName');
        $uppanel->nfc=$req->get('DigiID');
        $uppanel->status=$req->get('pStat');
        $uppanel->location=$req->get('pLoc');
        $uppanel->numCables=$req->get('noCables');
        $uppanel->port_type=$req->get('poType');
        $uppanel->Screen_disp=$req->get('pScreen');

        $uppanel->save();

        $digi = $req->get('DigiID');

        return redirect('search_nfc/'.$digi);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
