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

    public function eqarUpdateApplied($eqarId)
    {
        try {
            // Update the is_applied field in the database for the given eqar_id
            DB::table('eqars')
                ->where('eqar_id', $eqarId)
                ->update(['is_applied' => true]);

            // // Check if the is_applied is now true
            // $eqarData = DB::table('eqars')
            //     ->where('eqar_id', $eqarId)
            //     ->first();
    
            // if ($eqarData->is_applied) {
            //     // Insert into pasuc_files table with the corresponding data
            //     DB::table('pasucs')->insert([
            //         'kra' => 'I',
            //         'criteria' => 'A',
            //         'eqar_files_eqar_id' => $eqarId,
            //         'eqar_files_eqar_user_id' => $eqarData->eqar_user_id,
            //         'eval_status' => 'Pending',
            //         'is_submitted' => false,
            //         'cycle' => '9th'
            //     ]);
            // }
    
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    
    public function getPasuc()
    {
        $pasucFiles = DB::select("SELECT p.pasuc_id, e.title, p.cycle, p.kra, p.criteria, e.inclusive_date, e.accomplishment_name, e.date_submitted, p.eval_status, p.is_submitted FROM pasucs p INNER JOIN eqars e ON p.eqar_eqar_id = e.eqar_id;");
        
        $dynamicContent = 'Application of Accomplishments'; // Set your dynamic content here
    
        return view('application', [
            'pasucFiles' => $pasucFiles,
            'title_bar' => $dynamicContent
        ]);
    }


    public function pasucUpdateApplied($pasucId)
    {
        try {
            // Update the is_submitted field in the database for the given pasuc_id
            DB::table('pasucs')
                ->where('pasuc_id', $pasucId)
                ->update(['is_submitted' => true]);
    
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
