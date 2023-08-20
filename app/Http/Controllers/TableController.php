<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    function fetchData(Request $request) {
        //tentative contents
        
        $page = $request->input('page', 1);
        $perPage = 10; // Number of records per page
        $model = "Eqar";

        $query = $model::query();

        // Apply search filters if applicable
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('column_name', 'LIKE', "%$search%");
        }

        $data = $query->paginate($perPage, ['*'], 'page', $page);

        return response()->json($data);
    }
}
