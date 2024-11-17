<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col w-screen">
                {{-- Navbar Start --}}
                <nav class="bg-white border-gray-200 dark:bg-thrid sticky top-0 left-0 right-0 z-50 shadow-lg">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('asset/home/logo.png') }}" class="h-8" alt="Logo" />
                        </a>
                        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="asset/home/man.png" alt="user photo">
                            </button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                                    <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                            out</a>
                                    </li>
                                </ul>
                            </div>
                            <button data-collapse-toggle="navbar-user" type="button"
                                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                aria-controls="navbar-user" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 1h15M1 7h15M1 13h15" />
                                </svg>
                            </button>
                        </div>
                        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                            <ul
                                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-pink-800 md:dark:bg-thrid dark:border-pink-700">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-pink-700 md:p-0 md:dark:text-pink-500"
                                        aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-700 md:p-0 dark:text-white md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-700 md:p-0 dark:text-white md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Transaction</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-700 md:p-0 dark:text-white md:dark:hover:text-pink-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @yield('content')
                </nav>
                {{-- Navbar End --}}
            </div>
        </div>

        {{-- Content Start --}}
        <div class="row mt-20">
            <div class="col">
                {{-- @yield('content') --}}
            </div>
        </div>
        {{-- Content End --}}

        {{-- Footer Start --}}
        <div class="row">
            <div class="col text-center">&copy; 2024 Web Programming;</div>
        </div>
        {{-- Footer End --}}

    </div>
</body>
</html>
