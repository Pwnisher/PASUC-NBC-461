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
    <!-- Javascripts -->
    <script src="{{ asset('js/contentOperations.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/eqarOperations.js') }}"></script>
    <!-- CSRF meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eQAR Documents</title>
  </head>
  <body class = "bg-ghostwhite">
    <div class="flex h-screen flex-col ">
      <!--Navigation Bar-->
      @include('navbar')
      <!--Submenu Modal-->
      @include('submenu')
      <!--Main Container-->
      <div class="flex-1 relative">
        <div id="main_container" class="flex flex-col items-center h-full mt-8">
          <div id="title_bar-container" class="bg-transparent text-left w-[90%]">
            <h3 id="title_bar" class="mb-2 font-bold text-xl font-sans">Qualified Consolidated eQAR Documents</h3>
          </div>
          <div id="add_summary_container" class="bg-white rounded-md p-4 shadow-lg w-[90%] border border-gray-300 relative">
            <div class="flex flex-col items-stretch space-y-2">
              <div id="reminder" class="bg-card-color rounded-sm p-4 text-card-font-color">
                <span class="ml-3">
                  <i class="fas fa-lightbulb text-lg"></i>
                  <strong class="text-lg">Reminders:</strong>
                  <p class="ml-8 text-sm">
                    • The system is connected to the PUP eQAR system, so no need to re-upload the same accomplishment. <br>
                    • Upload your supporting documents on the Application tab. <br>
                    • Once you apply an accomplishment, you are not allowed to undo it. If you want to remove the accomplishment, go to <a href="{{ url('/application') }}"><b>Application</b></a> tab and click "Remove". <br>
                    • The application is based on the current cycle of the PASUC NBC No. 461.<br>
                    • Once the accomplishment is applied for promotion, please go to <a href="{{ url('/application') }}"><b>Application</b></a> tab to add supporting documents.<br>
                    • The system will automatically categorize the applied accomplishment. Click on the sub-menu of the <a href="{{ url('/application') }}"><b>Application</b></a> tab, or check the overall list on the <a href="{{ url('/application') }}"><b>Application</b></a> tab.<br>
                  </p>
                </span>
              </div>
              <div id="instructions" class="bg-card-color rounded-sm p-4 text-card-font-color">
                <span class="ml-3">
                  <i class="fas fa-lightbulb text-lg"></i>
                  <strong class="text-lg">Instructions</strong>
                  <p class="ml-8 text-sm">
                    • Verify the accomplishment before clicking the "Apply" button.<br>
                    • Once settled, please click the "Apply" button to the accomplishment you want to submit for the PASUC NBC 461 evaluation.<br>
                    • The system will turn the button to violet if the accomplishment is successfully in the PASUC NBC 461 evaluation system. <br>
                  </p>
                </span>
              </div>
              <hr>
              <!-- Date Picker -->
              <div class="flex flex-row justify-center space-x-4">
                <!-- From -->
                <div class="bg-gray-200 p-4 rounded-lg">
                  <label class="block mb-2 font-semibold text-sm">From:</label>
                  <input type="date" class="w-full px-4 py-2 border rounded-lg text-sm" max="9999-12-31">
                </div>

                <!-- To -->
                <div class="bg-gray-200 p-4 rounded-lg">
                  <label class="block mb-2 font-semibold text-sm">To:</label>
                  <input type="date" class="w-full px-4 py-2 border rounded-lg text-sm" max="9999-12-31">
                </div>

                <!-- Buttons -->
                <div class="flex flex-col">
                  <button class="bg-green-500 text-white px-4 py-2 rounded-lg flex items-center justify-center mb-2">
                    <i class="fas fa-sort mr-2" style="line-height: 0;"></i> Sort
                  </button>
                  <div class="relative inline-block">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center" onclick="toggleCycleDropdown()">
                      <i class="fas fa-cog mr-2"></i> Cycle
                    </button>
                    <ul id="cycleDropdown" class="absolute left-0 mt-2 py-1 text-sm bg-white border rounded-lg w-32 hidden z-[10000]">
                      <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer" onclick="selectCycle('8th')">8th cycle</li>
                      <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer" onclick="selectCycle('9th')">9th cycle</li>
                      <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer" onclick="selectCycle('10th')">10th cycle</li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr>
              <!--Limit and Search-->
              <div class="flex flex-row items-stretch justify-between">
                <!--Show entries-->
                <div class="text-sm text-gray-700 flex items-center space-x-2 w-1/3 justify-start">
                  <div class="relative">
                    <!-- Dropdown Selector -->
                    <form action="{{ route('eqar') }}" method="GET" class="flex items-center space-x-2">
                        <span>Show:</span>
                        <select name="perPage" onchange="this.form.submit()" class="appearance-none w-20 bg-white border border-gray-300 text-gray-700 py-1 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="10" {{ Request::input('perPage', 10) == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ Request::input('perPage') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ Request::input('perPage') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ Request::input('perPage') == 100 ? 'selected' : '' }}>100</option>
                        </select>
                    </form>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                      <i class="fas fa-chevron-down text-gray-600"></i>
                    </div>
                  </div>
                  <span>entries</span>
                </div>
                <!--Search-->
                <div class="text-sm text-gray-700 flex items-center space-x-2 w-1/3 justify-end">
                  <span>Search</span>
                  <div class="relative">
                    <input
                      type="text"
                      id="search-bar" 
                      class="block w-48 bg-white border border-gray-300 text-gray-700 py-1 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      placeholder="Search here..."
                    />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                      <i class="fas fa-search text-gray-600"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!--Table-->
              <div class="container text-sm mx-auto py-2">
                <div class="w-full bg-white shadow-md overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="bg-red-800 text-white">
                            <tr>
                                <th id="num_id" class="py-4 px-6 text-left">  </th>
                                <th id="title" class="py-4 px-6 cursor-pointer text-left">Title</th>
                                <th id="inclusive_date" class="py-4 px-6 cursor-pointer text-left">Inclusive Date</th>
                                <th id="accomplishment_name" class="py-4 px-6 cursor-pointer text-left">Accomplishment</th>
                                <th id="department_section" class="py-4 px-6 cursor-pointer text-left">Department/Section</th>
                                <th id="qar_type" class="py-4 px-6 cursor-pointer text-left">QAR Type</th>
                                <th id="date_submitted" class="py-4 px-6 cursor-pointer text-left">Date Submitted</th>
                                <th id="status" class="py-4 px-6 cursor-pointer text-left">Status</th>
                                <th class="py-4 px-6 cursor-pointer text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                          @include('partials.filtered_table')
                        </tbody>
                    </table>
                </div>
              </div>
              <!--Footer of the Table-->
              <div class="flex flex-row items-stretch justify-between">
                <!--Showing x to x of x entries-->
                <div class="text-sm text-gray-700 flex items-center space-x-2">
                  <span>Showing {{ $eqarFiles->firstItem() }} to {{ $eqarFiles->lastItem() }} of {{ $totalRecords }} entries</span>
                </div>
                <!-- Pagination Controls -->
                <div class="flex items-center justify-center space-x-1 border border-gray-300 rounded-lg text-xs">
                    @if ($eqarFiles->onFirstPage())
                        <a class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-l-lg cursor-not-allowed" disabled>
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                        <a class="flex items-center justify-center w-8 h-8 text-gray-600 cursor-not-allowed" disabled>
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @else
                        <a href="{{ $eqarFiles->appends(['perPage' => $eqarFiles->perPage()])->url(1) }}" class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-r-lg hover:bg-gray-200">
                            <i class="fas fa-angle-double-left"></i>
                        </a>

                        <a href="{{ $eqarFiles->appends(['perPage' => $eqarFiles->perPage()])->previousPageUrl() }}" class="flex items-center justify-center w-8 h-8 text-gray-600 hover:bg-gray-200">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @endif

                    @foreach ($eqarFiles->getUrlRange(1, $eqarFiles->lastPage()) as $page => $url)
                        @php
                            $queryParams = request()->query();
                            $queryParams['perPage'] = $eqarFiles->perPage();
                            $queryParams['page'] = $page;
                            $newUrl = url()->current() . '?' . http_build_query($queryParams);
                        @endphp
                        <a href="{{ $newUrl }}" class="flex items-center justify-center w-8 h-8 {{ $page == $eqarFiles->currentPage() ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-200' }}">
                            {{ $page }}
                        </a>
                    @endforeach

                    @if ($eqarFiles->hasMorePages())
                        <a href="{{ $eqarFiles->appends(['perPage' => $eqarFiles->perPage()])->nextPageUrl() }}" class="flex items-center justify-center w-8 h-8 text-gray-600 hover:bg-gray-200">
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <a href="{{ $eqarFiles->appends(['perPage' => $eqarFiles->perPage()])->url($eqarFiles->lastPage()) }}" class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-r-lg hover:bg-gray-200">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    @else
                        <a class="flex items-center justify-center w-8 h-8 text-gray-600 cursor-not-allowed" disabled>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <a class="flex items-center justify-center w-8 h-8 text-gray-600 rounded-r-lg cursor-not-allowed" disabled>
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </body>
</html>