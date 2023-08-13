<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Navigation</title>
		@vite('resources/css/app.css')
	</head>
	<body>
		<!-- Navbar goes here -->
		<nav class="bg-navbar shadow-lg sticky top-0">
			<div class="max-w-7xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-8 px-2">
								<img src="{{ URL('storage/PUP.png') }}" alt="Logo" class="h-8 w-8 mr-2">
								<span class="font-semibold text-white text-xl">PUP eQAR</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-0">
							<a href="" class="py-4 px-2 text-white bg-white bg-opacity-10">Home</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Accomplishments</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Review</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Reports</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Analytics</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">OFOSI / OPCR / IPCR</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Authentication</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Maintenances</a>
							<a href="" class="py-4 px-2 text-white hover:border-b-4 border-yellow-400">Activity Log</a>							
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
						<a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-white hover:text-yellow-400"
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="" class="block text-base px-2 py-4 text-yellow-400 font-bold ">Home</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white ">Accomplishments</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">Review</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">Reports</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">Analytics</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">OFOSI / OPCR / IPCR</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">Authentication</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">Maintenances</a></li>
					<li><a href="" class="block text-base px-2 py-4 text-white">Activity Log</a></li>
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>
		<h1 class="text-green-500 text-2xl md:text-3xl lg:text-4xl font-bold p-4">pang test ng sticky navbar </h1>
		<img src="https://images.unsplash.com/photo-1646498749176-b4ddb3b3b4a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="catimg">
		<img src="https://images.unsplash.com/photo-1646497795650-58de9c4fd44f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80" />
	</body>
</html>