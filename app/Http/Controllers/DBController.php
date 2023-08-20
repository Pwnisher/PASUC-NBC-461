<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eqar;
use App\Models\User;
use App\Models\Pasuc;
use Illuminate\Support\Facades\Log; 

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

        // Retrieve data from the "eqars" table for the specified eqar_id
        $eqarData = DB::table('eqars')
            ->where('eqar_id', $eqarId)
            ->first();

        // Debug: Log the retrieved eqarData
        Log::debug('Retrieved eqarData:', (array) $eqarData);

        $data = [
            'eqar_eqar_id' => $eqarData->eqar_id,
            'kra' => 1,
            'criteria' => 'A',
            'eqar_user_user_id' => $eqarData->user_user_id,
            'eval_status' => 'Pending',
            'is_submitted' => false,
            'cycle' => '9th',
        ];

        // Debug: Log the data to be inserted
        Log::debug('Data to be inserted:', $data);

        DB::table('pasucs')->insert($data);

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        // Debug: Log the error
        Log::error('Error occurred:', ['error' => $e->getMessage()]);

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
