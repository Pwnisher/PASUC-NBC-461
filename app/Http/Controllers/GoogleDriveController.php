<?php

namespace App\Http\Controllers;

use Google\Client;
use Google\Service\Drive;
use Illuminate\Http\Request;
use Google\Service\Drive\DriveFile;

class GoogleDriveController extends Controller
{
    public function dummy_gdrive()
    {
        return view('dummy_gdrive');
    }

    public function authenticate()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/client_secret_578102974959-2bkqgu29d22aqt1mi69e1jsml8mrqfc2.apps.googleusercontent.com.json'));
        $client->addScope('https://www.googleapis.com/auth/drive.file');
        $client->setRedirectUri('http://localhost:8000/oauth2callback'); // Update the URL

        $authUrl = $client->createAuthUrl();
        return redirect()->away($authUrl);
    }

    public function oauth2callback(Request $request)
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/client_secret_578102974959-2bkqgu29d22aqt1mi69e1jsml8mrqfc2.apps.googleusercontent.com.json'));
        $client->addScope('https://www.googleapis.com/auth/drive.file');
        $client->setRedirectUri('http://localhost:8000/oauth2callback');

        // Exchange authorization code for access token
        $accessToken = $client->fetchAccessTokenWithAuthCode($request->code);
        $client->setAccessToken($accessToken);

        // Store the access token in the session
        $request->session()->put('access_token', $accessToken);

        // Now you have the access token, proceed to upload files to Google Drive
    }

    public function uploadToDrive(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048', // Adjust the file types and size as needed
        ]);

        // Retrieve the access token from the session
        $accessToken = $request->session()->get('access_token');

        // Initialize the Google API client
        $client = new Client();
        $client->setAccessToken($accessToken);
        $driveService = new Drive($client);

        // Create a file metadata
        $fileMetadata = new DriveFile([
            'name' => $request->file('file')->getClientOriginalName(),
            // Add other metadata fields if needed
        ]);

        // Upload the file
        $file = $driveService->files->create($fileMetadata, [
            'data' => file_get_contents($request->file('file')->getRealPath()),
            'mimeType' => $request->file('file')->getClientMimeType(),
        ]);

        return response()->json(['message' => 'File uploaded successfully']);
    }
}
