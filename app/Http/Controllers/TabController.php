<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{
    public function home() {
        return view('home');
    }

    public function eqar() {
        return view('eqar');
    }

    public function application() {
        return view('addsummary');
    }

    public function show(Request $request, $any = null) {
        $dynamicContent = 'Application of Accomplishments';

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
            case 'kra2/criteriaB':
            case 'kra2/criteriaC':
                $dynamicContent = 'Criterion C - Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services';
                break;

            case 'kra3/criteriaA':
            case 'kra3/criteriaB':
            case 'kra3/criteriaC':
            case 'kra3/criteriaD':
                $dynamicContent = 'Criterion C - Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services';
                break;

            case 'kra4/criteriaA':
            case 'kra4/criteriaB':
            case 'kra4/criteriaC':
            case 'kra4/criteriaD':
                $dynamicContent = 'Criterion C - Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services';
                break;

            default:
                // Return a not found
                return response()->json(['error' => 'Not Found'], 404);
        }

        if ($request->ajax()) {
            // Return the dynamic content as JSON for the AJAX request
            return response()->json(['title_bar' => $dynamicContent]);
        } else {
            // Render the view with the dynamic content
            return view('addsummary', ['title_bar' => $dynamicContent]);
        }
    }
}
