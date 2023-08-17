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
    <div class="flex h-screen flex-col ">
      <!--Navigation Bar-->
      <div class="flex-none">
        <nav class="bg-navbar shadow-lg sticky top-0 h-16 text-xs pl-10 pr-10 z-[9999]">
          <div class="w-5/6 mx-auto h-full">
            <div class="flex justify-between items-center h-full">
              <div class="flex items-center space-x-7">
                <a href="#" class="flex items-center py-2 mr-5">
                  <img src="{{ URL('storage/PUP.png') }}" alt="Logo" class="h-8 w-8 mr-2">
                  <span class="font-medium text-white text-xl">PASUC NBC 461 EMIS</span>
                </a>
                <div class="hidden md:flex items-center space-x-3">
                  <a href="" class="py-2 px-2 text-base text-white hover:border-b-2 border-yellow-400">Home</a>
                  <button id="accomplishmentBtn" class="py-2 px-2 text-base text-white hover:border-b-2 border-yellow-400">Accomplishments</button>                  
                </div>
              </div>
              <div class="hidden md:flex items-center space-x-3">
                <div class="relative">
                  <button class="py-2 px-2 text-white hover:border-b-2 border-yellow-400">
                    <i class="fas fa-bell text-xs"></i>
                  </button>
                  <span class="text-white text-sm ml-2">Dela Cruz, Juan</span>
                </div>
                <div class="relative group">
                  <button class="ml-2 py-2 px-2 text-white hover:border-b-2 border-yellow-400" id="dropdown-toggle">
                    <i class="fas fa-caret-down text-xs"></i>
                  </button>
                  <div class="hidden absolute right-0 mt-2 bg-white text-gray-700" id="dropdown-menu">
                    <ul class="py-2 px-4 space-y-2 min-w-max">
                      <li><a href="#" class="block hover:bg-gray-100 px-2 py-1 hover:text-red-600">
                        <i class="fas fa-user-circle mr-2 text-gray-500"></i>
                        Profile
                      </a></li>
                      <li><a href="#" class="block hover:bg-gray-100 px-2 py-1 hover:text-red-600">
                        <i class="fas fa-cog mr-2 text-gray-500"></i>
                        Account Settings
                      </a></li>
                      <li><a href="#" class="block hover:bg-gray-100 px-2 py-1 hover:text-red-600">
                        <i class="fas fa-history mr-2 text-gray-500"></i>
                        Activity Log
                      </a></li>
                      <li><a href="#" class="block hover:bg-gray-100 px-2 py-1 hover:text-red-600">
                        <i class="fas fa-sign-out-alt mr-2 text-gray-500"></i>
                        Log Out
                      </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                  <i class="fas fa-bars w-6 h-6 text-white mobile-menu-icon"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden mobile-menu bg-navbar">
            <ul class="">
              <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
              <li><a href="" class="block text-base px-2 py-4 text-white ">Accomplishments</a></li>
				    </ul>
          </div>          
        </nav>
      </div>
      <!--Submenu Modal-->
      @include('submenu')
      <!--Main Container-->
      <div class="flex-1 overflow-y-auto relative">
        <div id="main_container" class="flex flex-col items-center h-screen mt-8">
          <div id="title_bar-container" class="bg-transparent text-left w-5/6">
            <h3 id="title_bar" class="mb-2 font-bold text-xl font-sans">Course Syllabus / Guide Developed / Revised / Enhanced</h3>
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
              <!--Limit and Search-->
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
              <!--Table-->
              <div class="container text-xs mx-auto py-2">
                <div class="w-full bg-white shadow-md overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="bg-red-800 text-white">
                            <tr>
                                <th class="py-4 px-6 text-left">  </th>
                                <th class="py-4 px-6 cursor-pointer text-left">File Title</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Date <span class="text-xs">(mm/dd/yy)</span></th>
                                <th class="py-4 px-6 cursor-pointer text-left">Cycle</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Status</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Notes</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                          <tr class="hover:bg-gray-100">
                              <td class="py-4 px-6">1</td>
                              <td class="py-4 px-6">Document 1</td>
                              <td class="py-4 px-6">08/14/23</td>
                              <td class="py-4 px-6">9th cycle</td>
                              <td class="py-4 px-6">Pending</td>
                              <td class="py-4 px-6">-</td>
                              <td class="py-4 px-6">
                                  <div class="flex justify-between w-full space-x-4">
                                      <button class="flex-1 px-4 py-2 bg-blue-500 text-white hover:bg-blue-700 rounded-md">View</button>
                                      <button class="flex-1 px-4 py-2 bg-yellow-500 text-white hover:bg-yellow-700 rounded-md">Edit</button>
                                      <button class="flex-1 px-4 py-2 bg-green-500 text-white hover:bg-green-700 rounded-md">Submit</button>
                                      <button class="flex-1 px-4 py-2 bg-red-500 text-white hover:bg-red-700 rounded-md">Delete</button>
                                  </div>
                              </td>
                          </tr>
                          <tr class="hover:bg-gray-100">
                              <td class="py-4 px-6">2</td>
                              <td class="py-4 px-6">Certificate</td>
                              <td class="py-4 px-6">08/14/23</td>
                              <td class="py-4 px-6">9th cycle</td>
                              <td class="py-4 px-6">Evaluated</td>
                              <td class="py-4 px-6">-</td>
                              <td class="py-4 px-6">
                                  <div class="flex justify-between w-full space-x-4">
                                      <button class="flex-1 px-4 py-2 bg-blue-500 text-white hover:bg-blue-700 rounded-md">View</button>
                                      <button class="flex-1 px-4 py-2 bg-yellow-500 text-white hover:bg-yellow-700 rounded-md">Edit</button>
                                      <button class="flex-1 px-4 py-2 bg-green-500 text-white hover:bg-green-700 rounded-md">Submit</button>
                                      <button class="flex-1 px-4 py-2 bg-red-500 text-white hover:bg-red-700 rounded-md">Delete</button>
                                  </div>
                              </td>
                          </tr>
                          <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
              </div>
              <!--Footer of the Table-->
              <div class="flex flex-row items-stretch justify-between">
                <!--Showing x to x of x entries-->
                <div class="text-sm text-gray-700 flex items-center space-x-2">
                  <span>Showing 1 to 2 of 2 entries</span>
                </div>
                <!--Pagination Controls-->
                <div class="flex items-center justify-center space-x-1 border border-gray-300 rounded-lg text-xs">
                  <a href="#" class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-l-lg hover:bg-gray-200">
                    <i class="fas fa-angle-double-left"></i>
                  </a>
                  <a href="#" class="flex items-center justify-center w-8 h-8 text-gray-600 hover:bg-gray-200">
                    <i class="fas fa-angle-left"></i>
                  </a>
                  
                  <!-- Generate the pagination links using a loop -->
                  <a href="#" class="flex items-center justify-center w-8 h-8 bg-blue-500 text-white hover:bg-blue-600">
                    1
                  </a>
                  <a href="#" class="flex items-center justify-center w-8 h-8 text-gray-600 hover:bg-gray-200">
                    2
                  </a>
                  <a href="#" class="flex items-center justify-center w-8 h-8 text-gray-600 hover:bg-gray-200">
                    3
                  </a>
                  
                  <a href="#" class="flex items-center justify-center w-8 h-8 text-gray-600 hover:bg-gray-200">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a href="#" class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-r-lg hover:bg-gray-200">
                    <i class="fas fa-angle-double-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </body>
</html>