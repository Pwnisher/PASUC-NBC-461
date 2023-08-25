<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For Vite Dev-->
    @vite('resources/css/app.css')
    <!--Font Awesome Library (For icons)-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico')}}">
    
    <title>GDrive Dummy Experiment</title>
</head>
<body class="flex items-center justify-center h-screen">
    <!-- Upload Documents Form -->
    <div class="bg-white p-8 rounded shadow-md w-80">
        <h1 class="text-2xl font-semibold mb-4">Upload Documents</h1>
        <!-- Add this button before your form -->
        <a href="{{ route('authenticate') }}" class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600 transition duration-300">Authorize with Google</a>
        <form id="uploadForm" class="space-y-4" action="{{ route('uploadToDrive') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="fileInput" class="text-sm font-medium mb-1">Choose a file</label>
                <input type="file" id="fileInput" name="file" class="py-2 px-3 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">Upload</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('uploadForm');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            
            const formData = new FormData(form);
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                });
                
                // Handle response from server if needed
                const data = await response.json();
                console.log(data);
            } catch (error) {
                console.error('Error uploading file:', error);
                console.log('Response:', response); // Add this line
            }
        });
    </script>
</body>
</html>
