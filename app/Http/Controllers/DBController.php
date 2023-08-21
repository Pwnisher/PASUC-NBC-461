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
    public function home() {
        return view('home');
    }

    public function eqar() {
        return view('eqar');
    }

    public function getEqar(Request $request)
    {
        $perPage = $request->input('perPage', 10); // Default to 10 if not provided
        $eqarFiles = Eqar::select('eqar_id', 'title', 'inclusive_date', 'accomplishment_name', 'department_section', 'qar_type', 'date_submitted', 'status', 'is_applied')
            ->paginate($perPage);

        $totalRecords = Eqar::count();

        return view('eqar', compact('eqarFiles', 'totalRecords'));
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
    
    public function getPasuc(Request $request, $any = null)
    {
        $pasucFiles = DB::select("SELECT p.pasuc_id, e.title, p.cycle, p.kra, p.criteria, e.inclusive_date, e.accomplishment_name, e.date_submitted, p.eval_status, p.is_submitted FROM pasucs p INNER JOIN eqars e ON p.eqar_eqar_id = e.eqar_id;");
        
        switch ($any) {
            case 'kra1/criteriaA':
                $dynamicContent = 'Criterion A - Teaching Effectiveness';
                break;
            case 'kra1/criteriaB':
                $dynamicContent = 'Criterion B - Curriculum and Instructional Materials Developed';
                break;
            case 'kra1/criteriaC':
                $dynamicContent = 'Criterion C - Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services';
                break;
                
            case 'kra2/criteriaA':
                $dynamicContent = 'Criterion A - Research Output Published';
                break;
            case 'kra2/criteriaB':
                $dynamicContent = 'Criterion B - Inventions';
                break;
            case 'kra2/criteriaC':
                $dynamicContent = 'Criterion C - Creative Works';
                break;

            case 'kra3/criteriaA':
                $dynamicContent = 'Criterion A - Service to the Institution';
                break;
            case 'kra3/criteriaB':
                $dynamicContent = 'Criterion B - Service to the Community';
                break;
            case 'kra3/criteriaC':
                $dynamicContent = 'Criterion C - Quality of Extension Services';
                break;
            case 'kra3/criteriaD':
                $dynamicContent = 'Criterion D - Bonus Criterion';
                break;

            case 'kra4/criteriaA':
                $dynamicContent = 'Criterion A - Involvement in Professional Organizations';
                break;
            case 'kra4/criteriaB':
                $dynamicContent = 'Criterion B - Continuing Development';
                break;
            case 'kra4/criteriaC':
                $dynamicContent = 'Criterion  - Awards and Recognition';
                break;
            case 'kra4/criteriaD':
                $dynamicContent = 'Criterion D - Bonus Indicators for Newly Hired Faculty';
                break;

            default:
                return view('error');
        }

        if ($request->ajax()) {
            // Return the dynamic content as JSON for the AJAX request
            return response()->json(['title_bar' => $dynamicContent]);
        } else {
            // Render the view with the dynamic content
            return view('application', [
                'pasucFiles' => $pasucFiles,
                'title_bar' => $dynamicContent
            ]);
        }
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
