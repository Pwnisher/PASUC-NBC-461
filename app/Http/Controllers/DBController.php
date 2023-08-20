<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function getEqar()
    {
        $eqarFiles = DB::select("SELECT eqar_id, title, inclusive_date, accomplishment_name, department_section, qar_type, date_submitted, status, is_applied FROM eqar_files");
        
        return view('eqar', ['eqarFiles' => $eqarFiles]);
    }

    public function eqarUpdateApplied($eqarId)
    {
        try {
            // Update the is_applied field in the database for the given eqar_id
            DB::table('eqar_files')
                ->where('eqar_id', $eqarId)
                ->update(['is_applied' => true]);
    
            // Check if the is_applied is now true
            $eqarData = DB::table('eqar_files')
                ->where('eqar_id', $eqarId)
                ->first();
    
            if ($eqarData->is_applied) {
                // Insert into pasuc_files table with the corresponding data
                DB::table('pasuc_files')->insert([
                    'kra' => 'I',
                    'criteria' => 'A',
                    'eqar_files_eqar_id' => $eqarId,
                    'eqar_files_eqar_user_id' => $eqarData->eqar_user_id,
                    'eval_status' => 'Pending',
                    'is_submitted' => false,
                    'cycle' => '9th'
                ]);
            }
    
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    

    public function getPasuc()
    {
    }

}
