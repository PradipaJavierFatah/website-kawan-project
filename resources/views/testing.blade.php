@extends('layout')


@section('content')
    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Testing</title>
        @vite('resources/css/app.css')
        <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    </head>


    <body>
        <div class="container">
            <div class="w-screen">
                <div
                    style="background-image: url('{{ asset('asset/home/bg-1.png') }}'); background-size: cover; background-position: center; height: 100vh;">

                    {{-- Section Start --}}
                    <section id="home" class="pt-36">
                        <div class="container">
                            <div class="flex flex-wrap px-7">
                                <div class="w-full self-center px-4">
                                    <h1 class="text-base font-semibold text-white md:text-4xl dark:text-white">
                                        Learning to<span
                                            class="mt-4 block text-4xl font-bold text-dark lg:text-5xl dark:text-white">
                                            Achieve and Maintain a Good Life</span>
                                </div>
                                <p class="m-4 font-medium leading-relaxed text-white">
                                    Kawan Project is an educational platform that presents various important knowledge about
                                    life that is rarely taught in schools. Our goal is to accompany and help you develop
                                    yourself to achieve a better and more balanced life. With various inspiring and
                                    practical content, we are committed to being your partner on your journey to the best
                                    version of yourself.
                                </p>
                            </div>
                        </div>
                    </section>
                    {{-- Section End --}}

{{-- Services Start --}}
<div id="services" class="mt-8">
    <!-- Our Services Title -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-white">Our Services</h2>
    </div>

    <!-- Card Container -->
    <div class="container mx-auto flex justify-center">
        <div id="skillsContainer"
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pt-4">

            <!-- Card 1 -->
            <div
                class="group relative flex flex-col justify-center items-center bg-pink-900 p-6 rounded-lg hover:bg-pink-700 transition-colors duration-300 w-48 h-54">
                <img src="{{ asset('asset/home/Mentor.png') }}"
                    alt="Mentor" class="w-25 h-25 mb-2">
                <h3 class="mt-4 text-center text-white font-medium">Mentor</h3>
            </div>

            <!-- Card 2 -->
            <div
                class="group relative flex flex-col justify-center items-center bg-pink-900 p-6 rounded-lg hover:bg-pink-700 transition-colors duration-300 w-48 h-54">
                <img src="{{ asset('asset/home/Consultant.png') }}"
                    alt="Consultant" class="w-25 h-25 mb-2">
                <h3 class="mt-4 text-center text-white font-medium">Consultant</h3>
            </div>

            <!-- Card 3 -->
            <div
                class="group relative flex flex-col justify-center items-center bg-pink-900 p-6 rounded-lg hover:bg-pink-700 transition-colors duration-300 w-48 h-54">
                <img src="{{ asset('asset/home/mbti.png') }}"
                    alt="MBTI Test" class="w-25 h-25 mb-2">
                <h3 class="mt-4 text-center text-white font-medium">MBTI Test</h3>
            </div>

            <!-- Card 4 -->
            <div
                class="group relative flex flex-col justify-center items-center bg-pink-900 p-6 rounded-lg hover:bg-pink-700 transition-colors duration-300 w-48 h-54">
                <img src="{{ asset('asset/home/stresss.png') }}"
                    alt="Stress Test" class="w-25 h-25 mb-2">
                <h3 class="mt-4 text-center text-white font-medium">Stress Test</h3>
            </div>

        </div>
    </div>
</div>


{{-- Services End --}}

                    </div>
                </div>
            </div>


            <div class="container">
                <div class="w-screen">
                    <div
                        style="background-image: url('{{ asset('asset/home/bg-2.png') }}'); background-size: cover; background-position: center; height: 100vh;">

                        {{-- Section Start --}}
                        <section id="home" class="pt-36">
                            <div class="container">
                                <div class="flex flex-wrap px-7">
                                    <div class="w-full self-center px-4">
                                        <h1 class="text-base font-semibold text-white md:text-4xl dark:text-white">
                                            Learning to<span
                                                class="mt-4 block text-4xl font-bold text-dark lg:text-5xl dark:text-white">
                                                Achieve and Maintain a Good Life</span>
                                    </div>
                                    <p class="m-4 font-medium leading-relaxed text-white">
                                        Kawan Project is an educational platform that presents various important knowledge
                                        about
                                        life that is rarely taught in schools. Our goal is to accompany and help you develop
                                        yourself to achieve a better and more balanced life. With various inspiring and
                                        practical content, we are committed to being your partner on your journey to the
                                        best
                                        version of yourself.
                                    </p>
                                </div>
                            </div>
                        </section>
                        {{-- Section End --}}
                    </div>
                </div>
            </div>




    </body>

    </html>
@endsection
