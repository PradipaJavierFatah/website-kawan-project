<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Kawan | Mentoring</title>
</head>

{{-- Mentoring page sudah disesuaikan packagenya kyk bastian punya,
    untuk button Purchase Now belum di link ke page payment,
    untuk 'Home' di navbar sm logo di navbar dan footer ke link ke homepage yang sudah login --}}

<body class="font-Kanit">
    {{-- Navbar Start --}}
    <div id="navbar">
        <nav class="bg-primary p-4 flex justify-between items-center">
            <div>
                <a href="home-after">
                    <img src="asset/home/logo.png" alt="Kawan" class="h-12 w-auto">
                </a>
            </div>

            <ul class="lg:flex gap-8 hidden">
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="home-after">Home</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="#">Services</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="#">Payments</a>
                </li>
            </ul>

            <div class="lg:flex gap-2 hidden">
                <a href="dashboard" class="flex flex-row items-center">
                    <span class="px-4 text-xl font-bold">Yanto</span>
                    <img src="asset/home/profile.png" alt="" class="h-12 w-12 rounded-full">
                </a>
            </div>

            <button id="hamburgToggle" class="lg:hidden block">
                <img src="asset/home/hamburgicon.png" alt="" class="h-8 w-8">
            </button>
        </nav>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden bg-primary">
            <ul class="px-4 py-2">
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="homeafter">Home</a>
                </li>
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="">Services</a>
                </li>
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="">Payments</a>
                </li>
            </ul>

            <div class="flex px-4 pt-2 pb-4 gap-2">
                <button class="bg-white border-2 border-black px-2 py-1 rounded-xl font-semibold">
                    <a href="login">Log In</a>
                </button>
                <button class="bg-secondary border-2 border-black px-2 py-1 rounded-xl font-semibold">
                    <a href="daftarakun">Sign Up</a>
                </button>
            </div>
        </div>
        {{-- Mobile Menu --}}
    </div>
    {{-- Navbar End --}}

    <!-- JUMBOTRON -->
    <section class="bg-center bg-cover" style="background-image: url('asset/home/jumbotron1.jpg');">
        <div class="text-center flex flex-col py-32">
            <h1 class="text-4xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold mb-10">Mentoring Program</h1>
            <span class="text-md sm:text-md md:text-xl lg:text-2xl font-medium text-white">Unlock your potential with our expert mentoring programs</span>
            <span class="text-md sm:text-md md:text-xl lg:text-2xl font-medium text-white">your journey to success starts here!</span>
        </div>
    </section>

    <!-- NAVBAR 2 -->
    <section class="bg-white shadow-lg sticky z-50 top-0">
        <div class="hidden md:flex justify-center items-center space-x-1 -ml-8">
            <a href="#AboutMentoring" class="text-lg font-medium lg:text-xl py-5 px-3 hover:underline">About Mentoring</a>
            <a href="#Packages" class="text-lg font-medium lg:text-xl py-5 px-3 hover:underline">Packages</a>
            <a href="#Mentors" class="text-lg font-medium lg:text-xl py-5 px-3 hover:underline">Our Mentors</a>
        </div>

        <!-- HAMBURG ICON FOR SMALLER WINDOWS -->
        <div class="flex md:hidden items-center justify-center py-5">
            <button id="nav-menu-toggle">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div> 

        <div id="nav-menu" class="hidden md:hidden flex flex-col">
            <a href="#AboutMentoring" class="text-lg lg:text-xl py-3 px-3 hover:underline">About Mentoring</a>
            <a href="#Packages" class="text-lg lg:text-xl py-3 px-3 hover:underline">Packages</a>
            <a href="#Mentors" class="text-lg lg:text-xl py-3 px-3 hover:underline">Our Mentors</a>
        </div>
    </section>

    <!-- ABOUT CONSULTING -->
    <section id="AboutMentoring" class="bg-primary flex flex-col md:flex-row p-5">
        <div class="max-w-auto text-justify text-xl sm:text-sm md:text-lg lg:text-2xl">
            <p>
                <strong class="font-bold sm:text-lg md:text-xl lg:text-5xl">M</strong>entoring for mental health involves a supportive relationship 
                where a more experienced individual provides guidance, encouragement, and practical assistance to someone 
                dealing with mental health challenges. This mentor helps the mentee navigate their mental health journey, 
                offering coping strategies, resources, and a compassionate ear. Mentoring for mental health aims to foster resilience, 
                promote self-care, and empower individuals to manage their mental well-being effectively. It can provide a sense of belonging, 
                reduce isolation, and offer hope for recovery. Through this relationship, mentees can gain insights, skills, and support to 
                improve their mental health and overall quality of life.
            </p>
        </div>
    </section>

    <!-- PACKAGES -->
    <section id="Packages">
        <div class="text-2xl font-semibold text-center py-5">
            <span>PACKAGES</span>
        </div>

        <div class="flex items-center justify-center container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <!-- PRICE CARD 1 -->
                <div class="card mt-3 mx-5">
                    <div class="p-5 flex-col bg-gray-800 rounded-xl">
                        <h4 class="text-gray-300 text-lg font-medium">Basic Plan</h4>
                        <div class="flex items-baseline text-white">
                            <span class="text-4xl font-bold">Rp50k</span>
                            <span class="text-xl font-normal text-gray-300">/month</span>
                        </div>
                        <hr class="my-5">
                        <a href="plans-login" class="flex justify-center items-center px-3 py-3 text-md font-medium text-center text-black bg-primary rounded-lg hover:bg-blue-700 hover:text-white">
                            Purschase Now
                        </a>
                        <hr class="my-5">
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">1 Session per Month</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Access to Resoruces</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Email Support</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PRICE CARD 2 -->
                <div class="card mt-3 mx-5">
                    <div class="p-5 flex-col bg-gray-800 rounded-xl">
                        <h4 class="text-gray-300 text-lg font-medium">Standard Plan</h4>
                        <div class="flex items-baseline text-white">
                            <span class="text-4xl font-bold">Rp150k</span>
                            <span class="text-xl font-normal text-gray-300">/month</span>
                        </div>
                        <hr class="my-5">
                        <a href="plans-login" class="flex justify-center items-center px-3 py-3 text-md font-medium text-center text-black bg-primary rounded-lg hover:bg-blue-700 hover:text-white">
                            Purschase Now
                        </a>
                        <hr class="my-5">
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">2 Sessions per Month</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Priority Email Supports</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Progress Tracking</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PRICE CARD 3 -->
                <div class="card mt-3 mx-5">
                    <div class="p-5 flex-col bg-gray-800 rounded-xl">
                        <h4 class="text-gray-300 text-lg font-medium">Premium Plan</h4>
                        <div class="flex items-baseline text-white">
                            <span class="text-4xl font-bold">Rp250k</span>
                            <span class="text-xl font-normal text-gray-300">/month</span>
                        </div>
                        <hr class="my-5">
                        <a href="plans-login" class="flex justify-center items-center px-3 py-3 text-md font-medium text-center text-black bg-primary rounded-lg hover:bg-blue-700 hover:text-white">
                            Purschase Now
                        </a>
                        <hr class="my-5">
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">4 Sessions per Month</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Priority Support</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Personalized Plans</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PRICE CARD 4 -->
                <div class="card mt-3 mx-5">
                    <div class="p-5 flex-col bg-gray-800 rounded-xl">
                        <h4 class="text-gray-300 text-lg font-medium">Ultimate Plan</h4>
                        <div class="flex items-baseline text-white">
                            <span class="text-4xl font-bold">Rp350k</span>
                            <span class="text-xl font-normal text-gray-300">/month</span>
                        </div>
                        <hr class="my-5">
                        <a href="plans-login" class="flex justify-center items-center px-3 py-3 text-md font-medium text-center text-black bg-primary rounded-lg hover:bg-blue-700 hover:text-white">
                            Purschase Now
                        </a>
                        <hr class="my-5">
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Unlimited Sessions</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">24/7 Support</span>
                            </li>

                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Monthly Webinars</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="border-black mt-8">
    <!-- MENTORS -->
    <section id="Mentors">
        <div class="text-2xl font-semibold text-center py-5">
            <span>Our Mentors</span>
        </div>
        <div class="text-center items-center pb-5 sm:text-sm md:text-lg">
            <span>All mentors are proven professionals with bachelor degree in Psychology and more than two year experience on mentoring</span>
        </div>
        <div class="flex flex-row justify-center container mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/profileman.png" class="w-20 h-20 my-5 rounded-full shadow-lg bg-top" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Alex Thompson S.Psi</h5>   
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/man.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Jamie Rivera S.Psi</h5>
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/profileboy.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Morgan Patel S.Psi</h5>
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/girl.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Casey Nguyen S.Psi</h5>
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/profilewoman.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Taylor Brooks S.Psi</h5>
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/bussiness-man.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Jordan Lee S.Psi</h5>
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/user.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Avery Chen S.Psi</h5>
                    </div>
                </div>
                <div class="w-40 sm:w-32 md:w-40 lg:w-48 border border-gray-300 rounded-lg shadow m-5 hover:bg-gray-200">
                    <div class="flex flex-col items-center pb-10">
                        <span class="mt-5 text-sm text-gray-600">Mentor</span>
                        <img src="asset/home/userman.png" class="w-20 h-20 my-5 rounded-full shadow-lg" alt="Profile image"/>
                        <h5 class="mb-1 mx-2 text-center text-lg md:text-xl font-medium text-black">Riley Martinez S.Psi</h5>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    {{-- Footer Start --}}
    <footer class="bg-primary mt-5 p-4">
        <div class="flex justify-between">
            <div>
                <a href="homeafter">
                    <img src="asset/home/logo.png" alt="Kawan" class="h-12 w-auto">
                </a>
            </div>

            <div class="flex flex-row space-x-12">
                <div class="">
                    <h2 class="text-2xl font-bold">
                        Tentang Kawan  
                    </h2>
                    <ul class="text-lg font-semibold py-4">
                        <li class="py-2 hover:underline">
                            <a href="">About Us</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="">Blog</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="">Privacy & Policy</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold">
                        Find Us On  
                    </h2>
                    <ul class="text-lg font-semibold py-4">
                        <li class="py-2 hover:underline">
                            <a href="https://instagram.com">Instagram</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="https://x.com">Twitter</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="https://facebook.com">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <hr class="my-6 border-gray-800">  

        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm sm:text-center">
                © 2023 Kawan™ All Rights Reserved.
            </span>
            <div class="flex mt-4">
                <a href="https://instagram.com" class="text-black" target="_blank">
                    <img src="asset/home//instagram.png" alt="Instagram" class="h-6 w-6">
                    <span class="sr-only">Instagram page</span>
                </a>
                <a href="https://x.com" class="ms-5">
                    <img src="asset/home//twitter.png" alt="Twitter/X" class="h-6 w-6">
                    <span class="sr-only">Twitter/X page</span>
                </a>
                <a href="https://facebook.com" class="ms-5 me-10">
                    <img src="asset/home/facebook.png" alt="Facebook" class="h-6 w-6">
                    <span class="sr-only">Facebook account</span>
                </a>
            </div>
        </div>
    </footer>
    {{-- Footer End --}}

    <script>
        document.getElementById('hamburgToggle').addEventListener('click', function(){
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden')
        })

        document.getElementById('nav-menu-toggle').addEventListener('click', function(){
            var navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('hidden')
        });

        const btn = document.querySelector("button.nav-menu-toggle")
        const menu = document.querySelector(".nav-menu")

        btn.addEventListener(click, () => {
            menu.classList.toggle(hidden);
        }); 
    </script>

</body>
</html>