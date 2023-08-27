<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ApproveController extends Controller
{
    public function approveForm(Request $request)
    {
        // Load the template Excel file
        $templatePath = storage_path('app/template.xlsx');
        $spreadsheet = IOFactory::load($templatePath);
        $sheet = $spreadsheet->getActiveSheet();

        // Get input values from the form
        //$fieldA = $request->input('stdEval_semDed');
        $fieldB = $request->input('stdEval_reason');
        //$fieldC = $request->input('fieldC');
        //$fieldD = $request->input('fieldD');
        //$fieldE = $request->input('fieldE');

        // Write values to Excel cells
        //$sheet->setCellValue('A1', $fieldA);
        $sheet->setCellValue('B1', $fieldB);
        //$sheet->setCellValue('C1', $fieldC);
        //$sheet->setCellValue('D1', $fieldD);
        //$sheet->setCellValue('E1', $fieldE);

        // Save the modified Excel file
        $outputPath = storage_path('app/output.xlsx');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($outputPath);

        return response()->download($outputPath, 'output.xlsx');
    }
}
