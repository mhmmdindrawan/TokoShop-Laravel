<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="bg-white shadow-md fixed w-full z-10">
            <div class="container mx-auto flex items-center justify-between p-4">
                <a class="text-2xl font-bold text-orange-500" href="{{ url('/') }}">Toko<span class="text-green-500">Shop</span></a>
        <button class="lg:hidden flex items-center px-3 py-2 border rounded text-gray-700 border-gray-300 hover:text-gray-900 hover:border-gray-400" onclick="toggleMenu()">
          <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
                <button class="lg:hidden text-gray-600 focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="hidden lg:flex lg:items-center lg:space-x-4" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="flex space-x-4">
                        <!-- Add your left navbar items here -->
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="flex space-x-4 ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="text-gray-600 hover:text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="text-gray-600 hover:text-gray-900" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="relative">
                                <a class="text-gray-600 hover:text-gray-900 flex items-center" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md overflow-hidden" aria-labelledby="navbarDropdown">
                                    <a class="block px-4 py-2 text-gray-600 hover:bg-gray-100" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 mt-16">
            @yield('content')
        </main>
    </div>
      <!-- Footer -->
      <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} {{ config('TokoShop') }}TokoShop</p>
        </div>
    </footer>
</body>
</html>
