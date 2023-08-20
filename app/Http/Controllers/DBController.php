<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function index()
    {
        return DB::select("select * from user");
    }

}
