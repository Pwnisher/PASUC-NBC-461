<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eqar;
use App\Models\User;

class DBController extends Controller
{
    public function index()
    {
        return DB::select("select * from user");
    }

}
