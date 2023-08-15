<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddSummaryController extends Controller
{
    public function addsummary() {
        return view('accomplishment-add-summary');
    }
}
