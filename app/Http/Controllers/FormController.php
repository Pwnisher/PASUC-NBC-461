<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Load the template Excel file
        $templatePath = storage_path('app/test.xlsx');
        if (!file_exists($templatePath)) {
            return redirect()->back()->with('error', 'Template file not found.');
        }

        $spreadsheet = IOFactory::load($templatePath);
        $sheet = $spreadsheet->getActiveSheet();

        // Get input values from the form
        $fieldA = $request->input('fieldA');
        $fieldB = $request->input('fieldB');
        $fieldC = $request->input('fieldC');
        $fieldD = $request->input('fieldD');
        $fieldE = $request->input('fieldE');

        // Write values to Excel cells
        $sheet->setCellValue('A1', $fieldA);
        $sheet->setCellValue('B1', $fieldB);
        $sheet->setCellValue('C1', $fieldC);
        $sheet->setCellValue('D1', $fieldD);
        $sheet->setCellValue('E1', $fieldE);

        // Create a temporary output file
        $outputPath = storage_path('app/output.xlsx');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($outputPath);

        // Return a response with the file for download
        return response()->download($outputPath, 'output.xlsx')->deleteFileAfterSend(true);
    }
}
