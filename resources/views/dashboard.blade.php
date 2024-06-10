<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="flex items-center justify-start my-4 mx-4">
                    <a href="home-after">
                        <x-primary-button class="font-Kanit text-white bg-secondery hover:bg-secondery-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                            {{ __('Home') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kawan | Home</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

{{-- Homepage setelah login, cuma beda sekarang pake foto profile aja gk ada sign in dan login button lagi sisanya sama --}}

<body class="font-Kanit">



 
</body>
</html>
</x-app-layout>
