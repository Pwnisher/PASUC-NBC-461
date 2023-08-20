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
        $dynamicContent = 'Application of Accomplishments';
        return view('addsummary', ['title_bar' => $dynamicContent]);
    }    

    public function show(Request $request, $any = null) {

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
            return view('addsummary', ['title_bar' => $dynamicContent]);
        }
    }
}
