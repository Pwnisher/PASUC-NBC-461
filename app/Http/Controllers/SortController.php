<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eqar;
use App\Models\Pasuc;

class SortController extends Controller
{
    public function eqarSort(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');
        $perPage = $request->input('perPage', 10); // Default to 10 if not provided

        $sortedData = Eqar::select('eqar_id', 'title', 'inclusive_date', 'accomplishment_name', 'department_section', 'qar_type', 'date_submitted', 'status', 'is_applied')
            ->where(function ($query) use ($fromDate, $toDate) {
                $query->whereBetween('inclusive_date', [$fromDate, $toDate])
                    ->orWhereBetween('date_submitted', [$fromDate, $toDate]);
            })
            ->paginate($perPage);

        return view('partials.eqarfiltered_table', ['eqarFiles' => $sortedData]);
    }

    public function pasucSort(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');
        $perPage = $request->input('perPage', 10); // Default to 10 if not provided

        $sortedData = Pasuc::select('pasucs.pasuc_id', 'eqars.title', 'pasucs.cycle', 'pasucs.kra', 'pasucs.criteria', 'eqars.inclusive_date', 'eqars.accomplishment_name', 'eqars.date_submitted', 'pasucs.eval_status', 'pasucs.is_submitted')
        ->join('eqars', 'pasucs.eqar_eqar_id', '=', 'eqars.eqar_id')
        ->where(function ($query) use ($fromDate, $toDate) {
            $query->whereBetween('eqars.inclusive_date', [$fromDate, $toDate])
                ->orWhereBetween('eqars.date_submitted', [$fromDate, $toDate]);
        })
        ->orderBy('eqars.inclusive_date', 'desc') // Adjust sorting as needed
        ->paginate($perPage);
    
        return view('partials.pasucfiltered_table', ['pasucFiles' => $sortedData]);
    }
}
