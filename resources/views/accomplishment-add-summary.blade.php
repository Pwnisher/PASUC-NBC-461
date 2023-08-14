<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--For Vite Dev-->
  @vite('resources/css/app.css')
  <!--Font Awesome Library (For icons)-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <!--Favicon-->
  <link rel="icon" type="image/png" href="{{ asset('favicon.ico')}}">

  <title>[Add] Document</title>
</head>
<body class = "bg-ghostwhite">
<div id="main_container" class="flex flex-col items-center h-screen mt-16">
  <div id="title_bar-container" class="bg-transparent text-left w-5/6">
    <h3 id="title_bar" class="mb-2 font-bold text-xl font-sans">Course Syllabus/ Guide Developed/ Revised/ Enhanced</h3>
  </div>
  <div id="add_summary_container" class="bg-white rounded-md p-4 shadow-lg w-5/6 border border-gray-300 relative">
    <div class="flex flex-col items-stretch space-y-2">
      <div id="reminder" class="bg-card-color rounded-sm p-4 text-card-font-color">
        <span class="ml-3">
          <i class="fas fa-lightbulb text-xs"></i>
          <strong class="text-xs">Reminders:</strong>
          <p class="ml-8 text-xs">
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
          </p>
        </span>
      </div>
      <div id="instructions" class="bg-card-color rounded-sm p-4 text-card-font-color">
        <span class="ml-3">
          <i class="fas fa-lightbulb text-xs"></i>
          <strong class="text-xs">Instructions</strong>
          <p class="ml-8 text-xs">
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
            • Lorem Ipsum Dolor Sit Amet <br>
          </p>
        </span>
      </div>
      <!--Add Accomplishment Button-->
      <div class="flex items-center space-x-2">
        <div class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded cursor-pointer">
          <div class="flex items-center space-x-2">
            <i class="fas fa-plus text-xs"></i>
            <p class="text-xs">Add an accomplishment</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="flex flex-row items-stretch justify-between">
        <!--Show entries-->
        <div class="text-sm text-gray-700 flex items-center space-x-2">
          <span>Show</span>
          <div class="relative">
            <select class="appearance-none w-20 bg-white border border-gray-300 text-gray-700 py-1 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <option>10</option>
              <option>25</option>
              <option>50</option>
              <option>100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
              <i class="fas fa-chevron-down text-gray-600"></i>
            </div>
          </div>
          <span>entries</span>
        </div>
        <!--Search-->
        <div class="text-sm text-gray-700 flex items-center space-x-2">
          <span>Search</span>
          <div class="relative">
            <input
              type="text"
              class="block w-48 bg-white border border-gray-300 text-gray-700 py-1 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              placeholder="Type here..."
            />
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
              <i class="fas fa-search text-gray-600"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</html>