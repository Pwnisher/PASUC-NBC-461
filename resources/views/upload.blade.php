<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Vite Dev -->
    @vite('resources/css/app.css')
    <!-- Font Awesome Library (For icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico')}}">
    <!-- CSRF meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eQAR Documents</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded shadow-md">
            @if(session('success'))
            <div class="bg-green-200 text-green-700 p-4 mb-4">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <label class="block text-gray-700 text-sm font-bold mb-2" for="document">
                    Choose a document to upload:
                </label>
                <input type="file" name="document" id="document" class="block w-full border rounded p-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    Upload to Google Drive
                </button>
            </form>

            <!-- ... (existing code) ... -->

            <button id="checkFilesButton" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                Check Uploaded Files
            </button>

            <!-- ... (existing code) ... -->

        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#checkFilesButton').click(function() {
                // Make an AJAX request to your backend endpoint to retrieve the list of uploaded files
                $.get('{{ route("listUploadedFiles") }}', function(data) {
                    // Display the list of files (you can modify this based on your UI)
                    alert(data);
                });
            });
        });
    </script>
</body>
</html>
