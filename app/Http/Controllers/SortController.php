<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eqar;

class SortController extends Controller
{
    public function sort(Request $request)
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

        return view('partials.filtered_table', ['eqarFiles' => $sortedData]);
    }
}
