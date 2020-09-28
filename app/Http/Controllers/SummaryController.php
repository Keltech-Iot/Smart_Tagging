<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatchPanel;
use App\Joint_Closure;
use App\FibrePort;
use App\Manhole;
use App\Aerial_Network;
use App\Cable;
use App\ClosureFibre;
use App\Work_Order;

class SummaryController extends Controller{

   public function index(){

       $panels = patchpanel::all();
       $cables = cable::all();
       $closures = joint_closure::all();
       $cloFib = closurefibre::all();
       $panFib = fibreport::all();

       $totClos = count($closures);
       $totCables = count($cables)/2;
       $totPanels = count($panels);

       $cloType = [0, 0, 0, 0, 0, 0];

       foreach($closures as $clo){
           switch($clo->type){

             case "Backhaul":
             $cloType[1]++;
             break;

             case "Feeder":
             $cloType[2]++;
             break;

             case "Aggregation":
             $cloType[3]++;
             break;

             case "Distribution":
             $cloType[4]++;
             break;

             case "Access":
             $cloType[5]++;
             break;
           }
       }

       $cabType = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

       foreach($cables as $cab){
           switch($cab->cable_type){
               case "2 Fibre":
               $cabType[1]++;
               break;

               case "4 Fibre":
               $cabType[2]++;
               break;

               case "8 Fibre":
               $cabType[3]++;
               break;

               case "16 Fibre":
               $cabType[4]++;
               break;

               case "24 Fibre":
               $cabType[5]++;
               break;

               case "48 Fibre":
               $cabType[6]++;
               break;

               case "72 Fibre":
               $cabType[7]++;
               break;
               
               case "96 Fibre":
               $cabType[8]++;
               break;

               case "144 Fibre":
               $cabType[9]++;
               break;

               case "288 Fibre":
               $cabType[10]++;
               break;

               case "Custom":
               $cabType[11]++;
               break;
           }
       }

       $totFibre = 0;

       $totFibre = (2 * $cabType[1]) + (4 * $cabType[2]) + (8 * $cabType[3]) + (16 * $cabType[4]) + (24 * $cabType[5]) + (48 * $cabType[6]) + (72 * $cabType[7])
                   + (96 * $cabType[8]) + (144 * $cabType[9]) + (288 * $cabType[10]);

       $spliced = count($cloFib);

       $DarkFib = $totFibre - $spliced;

       $panStat = [0, 0, 0, 0, 0];

       foreach($panFib as $p){
           switch($p->function){

           case "Active":
           $panStat[1]++;
           break;

           case "Reserved":
           $panStat[2]++;
           break;

           case "Disabled":
           $panStat[3]++;
           break;
           }
       }

       $quad = 0; $du = 0;
       foreach($panels as $pan){
           switch($pan->port_type){
               case "Quad":
               $quad++;
               break;

               case "Duplex":
               $du++;
               break;
           }
       }

       $panStat[4] = (48 * $du + 96 * $quad) - ($panStat[1] + $panStat[2] +$panStat[3]);

       return view('sum', ['panStat'=>$panStat, 'DarkFib'=>$DarkFib, 'spliced'=>$spliced, 'cabType'=>$cabType, 'cloType'=>$cloType,
       'totpan'=>$totPanels, 'totclo'=>$totClos, 'totFib'=>$totFibre]);
   }
}
