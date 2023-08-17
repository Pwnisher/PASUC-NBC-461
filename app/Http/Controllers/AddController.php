<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function home() {
        return view('home');
    }

    public function eqar() {
        return view('eqar');
    }

    public function accomplishment() {
        return view('addsummary');
    }

    public function add() {
        return view('add');
    }
    
    public function showPAGEaddKRA1() {
        return view('add-KRA1');
    }
    
    public function showPAGEaddKRA2() {
        return view('add-KRA2');
    }

    public function showPAGEaddKRA3() {
        return view('add-KRA3');
    }

    public function showPAGEaddKRA4() {
        return view('add-KRA4');
    }
}
