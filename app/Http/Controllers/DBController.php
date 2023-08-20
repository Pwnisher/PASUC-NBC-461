<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eqar;
use App\Models\User;

class DBController extends Controller
{
    public function getEqar()
    {
        $eqarFiles = DB::select("SELECT eqar_id, title, inclusive_date, accomplishment_name, department_section, qar_type, date_submitted, status, is_applied FROM eqars");
        
        return view('eqar', ['eqarFiles' => $eqarFiles]);
    }

    public function updateApplied($eqarId)
    {
        try {
            // Update the is_applied field in the database for the given eqar_id
            DB::table('eqar_files')
                ->where('eqar_id', $eqarId)
                ->update(['is_applied' => true]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

}
