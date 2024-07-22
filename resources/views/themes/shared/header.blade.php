<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-light fixed-top py-4 shadow-sm">
      <div class="container">
        <a class="text-2xl font-bold text-orange-500" href="#">Toko<span class="text-green-500">Shop</span></a>
        <button class="lg:hidden flex items-center px-3 py-2 border rounded text-gray-700 border-gray-300 hover:text-gray-900 hover:border-gray-400" onclick="toggleMenu()">
          <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="input-group mx-auto mt-5 mt-lg-0">
              <input type="text" class="form-control" placeholder="Mau cari apa?" aria-label="Mau cari apa?" aria-describedby="button-addon2">
              <button class="btn btn-outline-warning" type="button" id="button-addon2"><i class="bx bx-search" ></i></button>
            </div>
            <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
              <li class="nav-item me-3">
                <a class="nav-link" href="#">
                  <i class="bx bx-heart" ></i>
                  <span class="badge text-bg-warning rounded-circle position-absolute"></span>
                </a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link">
                  <i class="bx bx-cart-alt"></i>
                  <span class="badge text-bg-warning rounded-circle position-absolute"></span>
                </a>
              </li>
              
              <!-- mobile menu -->
              <div class="relative mt-3 lg:hidden">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300 ease-in-out" type="button" id="dropdownMenuButton1" onclick="toggleDropdownMenu()">
                  Menu
                </button>
                <ul class="hidden absolute bg-white shadow-lg rounded-lg py-2 w-48 mt-2 z-10" id="dropdownMenu">
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-500 transition-colors duration-200" href="#">Home</a></li>
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-500 transition-colors duration-200" href="#">Best Seller</a></li>
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-500 transition-colors duration-200" href="#">New Arrival</a></li>
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-blue-500 transition-colors duration-200" href="#">Blog</a></li>
                </ul>
              </div>
            
              
              <li class="nav-item mt-5 mt-lg-0 text-center">
                <a class="nav-link btn-second me-lg-3 " href="{{ route('carts.index') }}">Login</a>
              </li>
              <li class="nav-item mt-5 mt-lg-0 text-center">
                <a class="nav-link btn-second me-lg-3 " href="{{ route('register') }}">Register</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <script>
      function toggleDropdownMenu() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
      }
    </script>