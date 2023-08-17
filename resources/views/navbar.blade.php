<div class="bg-navbar sticky top-0 z-[10000]">
  <div class="w-[90%] mx-auto h-16">
    <div class="flex items-center justify-between h-full">
      <!-- Logo and Navigation Section -->
      <div class="flex items-center space-x-7">
        <a href="#" class="flex items-center py-2">
          <img src="{{ URL('storage/PUP.png') }}" alt="Logo" class="h-8 w-8 mr-2">
          <span class="font-medium text-white text-base">PASUC NBC 461 EMIS</span>
        </a>
        <div class="hidden md:flex items-center space-x-3">
          <a id="home_btn" href="{{ url('/home') }}"  class="py-2 px-2 text-base text-white hover:border-b-2 border-yellow-400">Home</a>
          <a id="eqar_btn" href="{{ url('/eqar') }}" class="py-2 px-2 text-base text-white hover:border-b-2 border-yellow-400">eQAR Documents</a>
          <button id="application_btn" class="py-2 px-2 text-base text-white hover:border-b-2 border-yellow-400">Application</button>
        </div>
      </div>

      <!-- Welcome/User/Account Section -->
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

      <!-- Mobile Menu Icon -->
      <div class="md:hidden flex items-center">
        <button class="outline-none mobile-menu-button">
          <i class="fas fa-bars w-6 h-6 text-white mobile-menu-icon"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu (Hidden by default) -->
  <div class="hidden mobile-menu bg-navbar">
    <ul class="">
      <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
      <li><a href="" class="block text-base px-2 py-4 text-white ">Accomplishments</a></li>
    </ul>
  </div>
</div>
