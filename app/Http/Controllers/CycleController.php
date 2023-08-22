<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasuc;
use App\Models\Eqar;

class CycleController extends Controller
{
    public function cycle(Request $request)
    {
        $selectedCycle = $request->query('cycle');

        // Using Eloquent relationships to retrieve the data
        $pasucFiles = Pasuc::select('pasucs.pasuc_id', 'eqars.title', 'pasucs.cycle', 'pasucs.kra', 'pasucs.criteria', 'eqars.inclusive_date', 'eqars.accomplishment_name', 'eqars.date_submitted', 'pasucs.eval_status', 'pasucs.is_submitted')
            ->join('eqars', 'pasucs.eqar_eqar_id', '=', 'eqars.eqar_id')
            ->where('pasucs.cycle', $selectedCycle)
            ->orderBy('pasucs.cycle')
            ->get();

        return view('partials.pasucfiltered_table', ['pasucFiles' => $pasucFiles]);
    }

}
