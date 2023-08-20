<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eqar;
use App\Models\User;
use App\Models\Pasuc;

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

           // Update the is_applied field in the "eqars" table
        DB::table('eqars')
        ->where('eqar_id', $eqarId)
        ->update(['is_applied' => true]);

        // Retrieve data from the "eqars" table for the specified eqar_id
        $eqarData = DB::table('eqars')
            ->where('eqar_id', $eqarId)
            ->first();

        // Insert data into the "pasucs" table using Eloquent
        $pasuc = new Pasuc;
        $pasuc->eqar_eqar_id = $eqarData->eqar_id;
        $pasuc->kra = 'I';
        $pasuc->criteria = 'A';
        $pasuc->eqar_user_user_id = $eqarData->user_user_id;
        $pasuc->eval_status = 'Pending';
        $pasuc->is_submitted = false;
        $pasuc->cycle = '9th';
        $pasuc->save();
        
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
