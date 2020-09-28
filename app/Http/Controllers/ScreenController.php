<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patchpanel;

class ScreenController extends Controller
{
    public function index(){

        $disp = patchpanel::first();

        return ($disp->Screen_disp);

    }
}
