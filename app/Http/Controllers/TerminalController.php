<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminalController extends Controller
{

    public function index($id, $Type){
        $panelID = $id;
        $port_type = $Type;

        if(($port_type) == '96 Fibre'){
            return view ('terminal.terminal_Quadtable', ['panelID'=>$panelID], ['port_type'=>$port_type]);
        }
        else if(($port_type) == '48 Fibre'){
            return view ('terminal.terminal_Dutable', ['panelID'=>$panelID], ['port_type'=>$port_type]);
        }
        else{
            return view('debug');
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
