<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eqar;
use App\Models\User;

class DBController extends Controller
{
    public function store(Request $request)
    {
        // Get an existing user or create a new user
        $user = User::firstOrCreate(['user_id' => 'ramon123'], [
            // Fill in other user details as needed
        ]);

        // Now you can use the retrieved user's ID for the eqars record
        $eqarData = [
            'is_applied' => 0,
            'file_path' => $request->file_path,
            'title' => $request->title,
            'inclusive_date' => $request->inclusive_date,
            'accomplishment_name' => $request->accomplishment_name,
            'department_section' => $request->department_section,
            'qar_type' => $request->qar_type,
            'date_submitted' => $request->date_submitted,
            'status' => $request->status,
            'user_user_id' => $user->user_id,
            'updated_at' => now(),
            'created_at' => now(),
        ];

        DB::table('eqars')->insert($eqarData);

    }

}
