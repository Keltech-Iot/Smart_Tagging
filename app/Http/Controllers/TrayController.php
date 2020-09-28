<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joint_Closure;
use App\Cable;
use App\splitter;

class TrayController extends Controller
{
    public function index($id){

        $digi = joint_closure::where('closure_id', $id)->pluck('nfc');
        $cables = cable::where('downstream_info', $id)->get();

        $i = 0;

        $numFib = [];

        foreach($cables as $c){

            $i++;

            switch($c->fibre_type){
                case "2 Fibre":
                $numFib[$i] = 2;
                break;
                case "4 Fibre":
                $numFib[$i] = 4;
                break;
                case "8 Fibre":
                $numFib[$i] = 8;
                break;
                case "16 Fibre":
                $numFib[$i] = 16;
                break;
                case "24 Fibre":
                $numFib[$i] = 24;
                break;
                case "48 Fibre":
                $numFib[$i] = 48;
                break;
                case "96 Fibre":
                $numFib[$i] = 96;
                break;
                case "144 Fibre":
                $numFib[$i] = 144;
                break;
                case "288 Fibre":
                $numFib[$i] = 288;
                break;
            }
        }

        

        return view ('trays.tray', ['cloID'=>$id, 'DigiID'=>$digi, 'cables'=>$cables, 'numFib'=>$numFib ]);
    }

    public function digi_index($id){
        $digi = joint_closure::where('closure_id', $id)->pluck('nfc');
        $cables = cable::where('downstream_info', $id)->get();


        $i = 0;

        $numFib = [];

        foreach($cables as $c){

            $i++;

            switch($c->fibre_type){
                case "2 Fibre":
                $numFib[$i] = 2;
                break;
                case "4 Fibre":
                $numFib[$i] = 4;
                break;
                case "8 Fibre":
                $numFib[$i] = 8;
                break;
                case "16 Fibre":
                $numFib[$i] = 16;
                break;
                case "24 Fibre":
                $numFib[$i] = 24;
                break;
                case "48 Fibre":
                $numFib[$i] = 48;
                break;
                case "96 Fibre":
                $numFib[$i] = 96;
                break;
                case "144 Fibre":
                $numFib[$i] = 144;
                break;
                case "288 Fibre":
                $numFib[$i] = 288;
                break;
            }
        }

        return view ('trays.digi_trays', ['cloID'=>$id, 'DigiID'=>$digi, 'cables'=>$cables, 'numFib'=>$numFib]);
    }

    public function spl_index($id){

        $splitter = splitter::where('wp_name', $id)->get();
        $digi = joint_closure::where('closure_id', $id)->pluck('nfc');

        $p = 0;

        $numFibSpl = []; $input = [];

        foreach($splitter as $s){

            $p++;

            switch($s->type){
                case "1x2":
                $numFibSpl[$p] = 2;
                $input[$p] = 1;
                break;
                case "1x4":
                $numFibSpl[$p] = 4;
                $input[$p] = 1;
                break;
                case "1x8":
                $numFibSpl[$p] = 8;
                $input[$p] = 1;
                break;
                case "1x16":
                $numFibSpl[$p] = 16;
                $input[$p] = 1;
                break;
                case "1x32":
                $numFibSpl[$p] = 32;
                $input[$p] = 1;
                break;
                case "1x64":
                $numFibSpl[$p] = 64;
                $input[$p] = 1;
                break;
                case "2x2":
                $numFibSpl[$p] = 2;
                $input[$p] = 2;
                break;
                case "2x4":
                $numFibSpl[$p] = 4;
                $input[$p] = 2;
                break;
                case "2x8":
                $numFibSpl[$p] = 8;
                $input[$p] = 2;
                break;
                case "2x16":
                $numFibSpl[$p] = 16;
                $input[$p] = 2;
                break;
                case "2x32":
                $numFibSpl[$p] = 32;
                $input[$p] = 2;
                break;
                case "2x64":
                $numFibSpl[$p] = 64;
                $input[$p] = 2;
                break;
            }
        }

        return view('trays.spl_tray', ['splitter'=>$splitter, 'numFib'=>$numFibSpl, 'inFib'=>$input, 'DigiID'=>$digi, 'cloID'=>$id]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
