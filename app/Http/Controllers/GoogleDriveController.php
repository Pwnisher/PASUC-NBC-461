<?php

// app/Http/Controllers/GoogleDriveController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Drive;
use Illuminate\Support\Facades\Log;
use Google\Service\Exception;


class GoogleDriveController extends Controller
{
    
    public function uploadDocument(Request $request)
    {
        try {
            // Get the contents of the service account JSON key file
            $serviceAccountKeyContents = file_get_contents(storage_path('app/gdrive-pasuc-nbc-461-cf7e35012231.json'));

            if ($serviceAccountKeyContents === false) {
                throw new \Exception("Unable to read JSON key file.");
            }

            // Load the service account credentials from the JSON key contents
            $client = new \Google\Client();
            $client->setAuthConfig(json_decode($serviceAccountKeyContents, true));
            $client->addScope(\Google\Service\Drive::DRIVE);

            // Create a Google Drive service instance
            $driveService = new \Google\Service\Drive($client);

            // Define the file metadata
            $fileMetadata = new \Google\Service\Drive\DriveFile([
                'name' => $request->file('document')->getClientOriginalName(),
            ]);

            // Upload the file to Google Drive
            $content = file_get_contents($request->file('document')->path());
            $file = $driveService->files->create($fileMetadata, [
                'data' => $content,
                'mimeType' => $request->file('document')->getClientMimeType(),
                'uploadType' => 'multipart',
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Document uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function listUploadedFiles()
    {
        try {

            $serviceAccountKeyContents = file_get_contents(storage_path('app/gdrive-pasuc-nbc-461-cf7e35012231.json'));

            // Load the service account credentials
            $client = new Client();
            $client->setAuthConfig(json_decode($serviceAccountKeyContents, true));
            $client->addScope(Drive::DRIVE);

            // Create a Google Drive service instance
            $driveService = new Drive($client);

            // Retrieve the list of uploaded files
            $files = $driveService->files->listFiles();

            // Process the list of files
            $fileNames = [];
            foreach ($files->getFiles() as $file) {
                $fileNames[] = $file->getName();
            }

            // Return the list of file names as JSON response
            return response()->json($fileNames);
        } catch (\Exception $e) {
            // Log the exception
            Log::error('An error occurred during listing files: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'An error occurred during listing files.'], 500);
        }
    }
    
    public function index() {
        return view('upload');
    }
}
