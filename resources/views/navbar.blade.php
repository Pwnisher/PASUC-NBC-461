<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Navigation</title>
		@vite('resources/css/app.css')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
	</head>
	<body>
	<nav class="bg-navbar shadow-lg sticky top-0 h-10vh text-xs pl-10 pr-10">
		<div class="max-w-7xl mx-auto px-4">
			<div class="flex justify-between items-center h-full">
				<div class="flex items-center space-x-7">
					<a href="#" class="flex items-center py-2">
						<img src="{{ URL('storage/PUP.png') }}" alt="Logo" class="h-8 w-8 mr-2">
						<span class="font-semibold text-white text-s">PASUC NBC 461 EMIS</span>
					</a>
					<div class="hidden md:flex items-center space-x-4">
						<a href="" class="py-2 px-2 text-white hover:border-b-2 border-yellow-400">Home</a>
						<a href="" class="py-2 px-2 text-white hover:border-b-2 border-yellow-400">Accomplishments</a>
					</div>
				</div>
				<div class="hidden md:flex items-center space-x-3">
					<div class="relative">
						<button class="py-2 px-2 text-white hover:border-b-2 border-yellow-400">
							<i class="fas fa-bell text-xs"></i>
						</button>
						<span class="text-white font-medium ml-2">Dela Cruz, Juan</span>
					</div>
					<div class="relative group">
						<button class="ml-2 py-2 px-2 text-white hover:border-b-2 border-yellow-400" id="dropdown-toggle">
							<i class="fas fa-caret-down text-xs"></i>
						</button>
						<div class="hidden absolute right-0 mt-2 bg-white text-gray-700" id="dropdown-menu">
							<ul class="py-2 px-4 space-y-2 min-w-max">
								<li><a href="#" class="block hover:bg-gray-100 px-2 py-1 text-maroon-600">
									<i class="fas fa-user-circle mr-2 text-gray-500"></i>
									Profile
								</a></li>
								<li><a href="#" class="block hover:bg-gray-100 px-2 py-1 text-maroon-600">
									<i class="fas fa-cog mr-2 text-gray-500"></i>
									Account Settings
								</a></li>
								<li><a href="#" class="block hover:bg-gray-100 px-2 py-1 text-maroon-600">
									<i class="fas fa-history mr-2 text-gray-500"></i>
									Activity Log
								</a></li>
								<li><a href="#" class="block hover:bg-gray-100 px-2 py-1 text-maroon-600">
									<i class="fas fa-sign-out-alt mr-2 text-gray-500"></i>
									Log Out
								</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="md:hidden flex items-center">
					<button class="outline-none mobile-menu-button">
						<svg class="w-6 h-6 text-white hover:text-yellow-400"
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor">
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
			</div>
		</div>
		<div class="hidden mobile-menu">
			<ul>
				<!-- Your mobile menu items here -->
			</ul>
		</div>
		<script>
			const btn = document.querySelector("button.mobile-menu-button");
			const menu = document.querySelector(".mobile-menu");

			btn.addEventListener("click", () => {
				menu.classList.toggle("hidden");
			});

			const dropdownToggle = document.getElementById("dropdown-toggle");
			const dropdownMenu = document.getElementById("dropdown-menu");

			dropdownToggle.addEventListener("click", (event) => {
				event.stopPropagation();
				dropdownMenu.classList.toggle("hidden");
			});

			document.addEventListener("click", () => {
				dropdownMenu.classList.add("hidden");
			});
		</script>
	</nav>



		<h1 class="text-green-500 text-2xl md:text-3xl lg:text-4xl font-bold p-4">pang test ng sticky navbar </h1>
		<img src="https://images.unsplash.com/photo-1646498749176-b4ddb3b3b4a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="catimg">
		<img src="https://images.unsplash.com/photo-1646497795650-58de9c4fd44f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80" />
	</body>
</html>