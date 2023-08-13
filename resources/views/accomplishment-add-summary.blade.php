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
  <div id= "title_bar-container" class="bg-transparent text-left w-5/6">
    <h3 id="title_bar" class="mb-2 font-bold text-xl font-sans">Course Syllabus/ Guide Developed/ Revised/ Enhanced</h3>
  </div>
  <div id="add_summary_container" class="bg-white rounded-md p-4 shadow-lg w-5/6 border border-gray-300 relative">
    <div class="flex flex-col items-center space-y-2">
      <div id = "reminder" class = "bg-reminder-color rounded-sm p-4 w-full">
        <p>
          Reminders:
          <ol class="list-disc">
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ol>
        </p>
      </div>
      <div id = "instructions" class = "bg-reminder-color rounded-sm p-4 w-full">
        <p>
          Instructions:
          <ol class="list-disc">
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ol>
        </p>
      </div>
    </div>
  </div>
</html>