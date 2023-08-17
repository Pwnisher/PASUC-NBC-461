<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="bg-gray-800 w-screen">
    <div class="h-16 w-10/12 mx-auto flex items-center justify-between">
  <!-- Navigation Section -->
      <div class="w-4/5">
        <ul class="flex space-x-4 ml-4">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">About</a></li>
          <li><a href="#" class="text-white">Services</a></li>
          <li><a href="#" class="text-white">Contact</a></li>
        </ul>
      </div>

      <!-- Welcome/User/Account Section -->
      <div class="w-1/5 flex items-center justify-end mr-4">
        <div class="text-white mr-4">
          Welcome, User!
        </div>
        <div>
          <a href="#" class="text-white">Account</a>
        </div>
      </div>
    </div>
  </div>

</html>
