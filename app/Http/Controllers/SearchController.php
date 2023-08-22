<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eqar;
use App\Models\Pasuc;

class SearchController extends Controller
{
    public function eqarSearch(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $perPage = $request->input('perPage', 10); // Default to 10 if not provided

        $filteredData = Eqar::where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('inclusive_date', 'like', '%' . $searchTerm . '%')
            ->orWhere('accomplishment_name', 'like', '%' . $searchTerm . '%')
            ->orWhere('department_section', 'like', '%' . $searchTerm . '%')
            ->orWhere('qar_type', 'like', '%' . $searchTerm . '%')
            ->paginate($perPage);

        return view('partials.eqarfiltered_table', ['eqarFiles' => $filteredData]);
    }

    public function pasucSearch(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $perPage = $request->input('perPage', 10); // Default to 10 if not provided

        $filteredData = Pasuc::select('pasucs.pasuc_id', 'eqars.title', 'pasucs.cycle', 'pasucs.kra', 'pasucs.criteria', 'eqars.inclusive_date', 'eqars.accomplishment_name', 'eqars.date_submitted', 'pasucs.eval_status', 'pasucs.is_submitted')
        ->join('eqars', 'pasucs.eqar_eqar_id', '=', 'eqars.eqar_id')
        ->where('eqars.title', 'like', '%' . $searchTerm . '%')
        ->orWhere('eqars.inclusive_date', 'like', '%' . $searchTerm . '%')
        ->orWhere('eqars.accomplishment_name', 'like', '%' . $searchTerm . '%')
        ->orWhere('pasucs.eval_status', 'like', '%' . $searchTerm . '%')
        ->paginate($perPage);

        return view('partials.pasucfiltered_table', ['pasucFiles' => $filteredData]);
    }
}