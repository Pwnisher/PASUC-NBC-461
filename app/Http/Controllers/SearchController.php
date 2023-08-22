<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eqar;

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

        return view('partials.filtered_table', ['eqarFiles' => $filteredData]);
    }
}