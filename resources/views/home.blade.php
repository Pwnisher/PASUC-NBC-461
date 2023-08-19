<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For Vite Dev-->
    @vite('resources/css/app.css')
    <!--Font Awesome Library (For icons)-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico')}}">
    <!-- Javascripts -->
    <script src="{{ asset('js/contentOperations.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="bg-gray-200">

    <!-- Navigation Bar -->
    <div class="flex-none">
        <div class="h-[10%]">
            <!--Navigation Bar-->
            @include('navbar')
            <!--Submenu Modal-->
            @include('submenu')
        </div>
    </div>
    <!--Main Container-->
    <main id="main_container" class="flex flex-col items-center min-h-screen mt-16">

        <div id="title_bar_container" class=" text-left max-w-6xl w-full px-4 sm:px-4 lg:px-4 sm:mb-3 lg:mb-3">
            <h5 id="name_bar" class="text-base sm:text-base md:text-base lg:text-lg xl:text-xl">
                JUAN DELA CRUZ
                <p class="inline ms-2 sm:ms-10 text-sm sm:text-base md:text-sm lg:text-base">
                    Faculty Applicant · Evaluator · Pre-Evaluator
                </p>
            </h5>
        </div>

        <div class="container bg-white max-w-6xl w-full sm:mx-4 shadow-md rounded-md">
            <h5 class=" font-bold border-solid border-b-2 py-1 px-5 text-lg sm:text-base md:text-base lg:text-lg">
                9th Cycle
            </h5>
            <h5 class="font-bold border-solid border-b-2 p-2 text-lg sm:text-base md:text-base lg:text-lg">
                <!-- Calendar Icon -->
                <svg class="w-6 h-6 inline-block mx-2 mb-1" fill="maroon" stroke="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path  d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                    <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                </svg>

                Quarter 2 of 2023
                <small class="ml-2 md:ml-3 font-normal text-base sm:text-base md:text-base lg:text-base">
                    Deadline: <strong>June 30, 2023</strong>
                </small>
            </h5>

            <div class="container text-xs mx-auto py-2">
                <div class="w-max bg-white shadow-md overflow-x-auto mx-auto my-10">
                    <table class="table-auto w-full">
                        <thead class="bg-red-800 text-white">
                            <tr>
                                <th class="py-4 px-6 cursor-pointer text-left">Name</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Campus</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Previous Position</th>
                                <th class="py-4 px-6 cursor-pointer text-left">NBC 461 Position</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                          <tr class="hover:bg-gray-100">
                              <td class="py-4 px-6">Cedrick Monge</td>
                              <td class="py-4 px-6">Taguig</td>
                              <td class="py-4 px-6">Instructor</td>
                              <td class="py-4 px-6">Associate Professor</td>
                          </tr>
                          <tr class="hover:bg-gray-100">
                              <td class="py-4 px-6">John Ramos</td>
                              <td class="py-4 px-6">Manila</td>
                              <td class="py-4 px-6">Associate Professor</td>
                              <td class="py-4 px-6">Professor</td>
                          </tr>
                          <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </main>
</body>
</html>
