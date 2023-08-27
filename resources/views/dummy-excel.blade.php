<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Form</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4 text-center">Elegant Form</h1>
        <form action="{{ route('submit-form') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <input type="text" name="fieldA" class="input-field" placeholder="Field A">
                <input type="text" name="fieldB" class="input-field" placeholder="Field B">
                <input type="text" name="fieldC" class="input-field" placeholder="Field C">
                <input type="text" name="fieldD" class="input-field" placeholder="Field D">
                <input type="text" name="fieldE" class="input-field" placeholder="Field E">
            </div>
            <button type="submit" class="btn-primary mt-4 w-full bg-lime-500 hover:bg-lime-600">Submit</button>
        </form>
    </div>
</body>
</html>
