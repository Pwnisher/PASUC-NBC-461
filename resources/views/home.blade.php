<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <main id="main_container" class="flex flex-col items-center min-h-screen mt-16">

        <div id="title_bar_container" class=" text-left max-w-6xl w-full px-4 sm:px-4 lg:px-4 sm:mb-3 lg:mb-3">
            <h5 id="name_bar" class="text-lg sm:text-lg md:text-lg lg:text-xl xl:text-2xl">
                JUAN 3 DELA CRUZ
                <p class="inline ms-2 sm:ms-10 text-sm sm:text-base md:text-sm lg:text-base">
                    Faculty Applicant · Evaluator · Pre-Evaluator
                </p>
            </h5>
        </div>

        <div class="container bg-white max-w-6xl w-full sm:mx-4 shadow-md rounded-md">
            <h5 class="font-bold border-solid border-b-2 py-1 px-3 text-lg sm:text-base md:text-base lg:text-lg">
                9th Cycle
            </h5>
            <h5 class="font-bold border-solid border-b-2 p-2 text-lg sm:text-base md:text-base lg:text-lg">
                Quarter 2 of 2023
                <small class="ml-2 md:ml-3 font-normal text-base sm:text-base md:text-base lg:text-base">
                    Deadline: <strong>June 30, 2023</strong>
                </small>
            </h5>
            <div class="bg-white max-w-6xl w-full p-2 my-10"></div>
        </div>
    </main>
</body>
</html>
