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

{{-- Homepage before login, untuk button login dan singup ini gw udh link ke page masing-masing,
    tombol read now di artikel juga sudah masuk di link ke artikel aslinya --}}

<body class="font-Kanit">
    {{-- Navbar Start --}}
    <div id="navbar">
        <nav class="bg-primary p-4 flex justify-between items-center">
            <div>
                <a href="home-before">
                    <img src="asset/home/logo.png" alt="Kawan" class="h-12 w-auto">
                </a>
            </div>

            <ul class="lg:flex gap-8 hidden">
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="home-before">Home</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="#">Services</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="#">Payments</a>
                </li>
            </ul>

            <div class="lg:flex gap-2 hidden">
                <button class="bg-white border-2 border-black px-2 py-1 rounded-xl text-xl font-semibold">
                    <a  href={{ route('login') }}>Log In</a>
                </button>
                <button class="bg-secondary border-2 border-black px-2 py-1 rounded-xl text-xl font-semibold">
                    <a  href={{ route('register') }}>Sign Up</a>
                </button>
            </div>

            <button id="hamburgToggle" class="lg:hidden block">
                <img src="asset/home/hamburgicon.png" alt="" class="h-8 w-8">
            </button>
        </nav>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden bg-primary">
            <ul class="px-4 py-2">
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="home">Home</a>
                </li>
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="">Services</a>
                </li>
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="">Payments</a>
                </li>
            </ul>

            <hr class="border-black m-5">

            <div class="flex px-4 pt-2 pb-4 gap-2">
                <button class="bg-white border-2 border-black px-2 py-1 rounded-xl font-semibold">
                    <a href="login">Log In</a>
                </button>
                <button class="bg-secondary border-2 border-black px-2 py-1 rounded-xl font-semibold">
                    <a  href={{ route('register') }}>Sign Up</a>
                </button>
            </div>
        </div>
        {{-- Mobile Menu --}}
    </div>
    {{-- Navbar End --}}


    {{-- Content Start --}}
    {{-- Jumbotron Start --}}
    <section>
        <div class="bg-gradient-to-b from-primary to-white">
            <p class="py-20 px-4 text-center sm:text-xl md:text-2xl lg:text-3xl">
                Kawan is a comprehensive online platform offering <strong class="font-semibold">professional mental health consultation and mentoring services.</strong>
                With a team of <strong class="font-semibold">licensed therapists, psychologists, and counselors,</strong> the website provides 
                <strong class="font-semibold">personalized guidance and support</strong> for individuals facing various mental health challenges or seeking personal development.
            </p>
        </div>
    </section>
    {{-- Jumbotron End --}}

    {{-- Services Start --}}
    <section>
        <div class="text-2xl font-semibold text-center py-5">
            <span>OUR SERVICES</span>
        </div>

        <div class="flex justify-center space-x-6 font-medium mb-8">
            <div class="grid md:grid-cols-4 sm:grid-cols-2">
                <div class="p-6">
                    <a href="#" class="text-lg bg-gray-100 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-primary">
                        <img src="asset/home/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Mentoring
                    </a>
                </div>
                
                <div class="p-6">
                    <a href="#" class="text-lg bg-gray-100 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-primary">
                        <img src="asset/home/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Consulting
                    </a>
                </div>

                <div class="p-6">
                    <a href="#" class="text-lg bg-gray-100 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-primary">
                        <img src="asset/home/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        MBTI Test
                    </a>
                </div>

                <div class="p-6">
                    <a href="#" class="text-lg bg-gray-100 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-primary">
                        <img src="asset/home/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Stress Test
                    </a>
                </div>
            </div> 
        </div>
    </section>
    {{-- Services End --}}

    {{-- Articles Start --}}
    <section>
        <div class="text-2xl font-semibold text-center py-5 flex-wrap">
            <span>ARTICLES & NEWS</span>
        </div>

        <div id="container" class="bg-white">
            <div class="p-4">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1">
                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/remaja.png" alt="" class="w-full h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Mengenal Pentingnya Kesehatan Mental pada Remaja</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://yankes.kemkes.go.id/view_artikel/362/mengenal-pentingnya-kesehatan-mental-pada-remaja" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>    
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/kesmen.webp" alt="" class="w-full h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Apa Itu Kesehatan Mental? Gejala & Penyebab</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://www.halodoc.com/kesehatan/kesehatan-mental" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>    
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/mhawareness.png" alt="" class="w-full lg:h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4 ">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Memahami Kesehatan Mental dan Cara Penanganannya</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://rsj.acehprov.go.id/berita/kategori/artikel/memahami-kesehatan-mental-dan-cara-penanganannya" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>    
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/artikel4-konsul.jpg" alt="" class="w-full h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Manfaat Konsultasi Psikologi untuk Kesehatan Mental</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://www.alodokter.com/memanfaatkan-konsultasi-psikologi-untuk-meningkatkan-kesehatan-mental#:~:text=Konsultasi%20psikologi%20adalah%20kegiatan%20komunikasi,gangguan%20mental%20yang%20dialami%20pasien." target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Articles Start --}}

    {{-- Testimonials Start --}}
    <section>
        <div class="text-2xl font-semibold text-center py-5 flex-wrap">
            <span>SEE WHAT PEOPLE SAYS</span>
        </div>

        <div id="container">
            <div class="p-4">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1">
                    <div id="box" class="bg-gray-100 rounded-lg mr-4 mb-2">
                        <div class="p-4">
                            <div class="text-center border-2 border-black rounded-xl">
                                <p>Mentoring</p>
                            </div>
                            <div class="mt-2 text-lg text-black text-center">
                                <span>- Sarah Johnson</span>
                            </div>
                            <div class="mt-2 text-xl text-black text-center">
                                <h3>Alex Thompson's mentorship transformed my approach to mental health, providing me with effective strategies and unwavering support.</h3>
                            </div>
                        </div>    
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg mr-4 mb-2">
                        <div class="p-4">
                            <div class="text-center border-2 border-black rounded-xl">
                                <p>Consulting</p>
                            </div>
                            <div class="mt-2 text-lg text-black text-center">
                                <span>- Michael Brown</span>
                            </div>
                            <div class="mt-2 text-xl text-black text-center">
                                <h3>Harper Wilson's consulting helped me develop better coping mechanisms and significantly improve my overall well-being.</h3>
                            </div>
                        </div>    
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg mr-4 mb-2">
                        <div class="p-4">
                            <div class="text-center border-2 border-black rounded-xl">
                                <p>Mentoring</p>
                            </div>
                            <div class="mt-2 text-lg text-black text-center">
                                <span>- Jessica Lee</span>
                            </div>
                            <div class="mt-2 text-xl text-black text-center">
                                <h3>With Casey Nguyen's guidance, I gained valuable insights that have greatly enhanced my mental health journey.</h3>
                            </div>
                        </div>    
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg mr-4 mb-2">
                        <div class="p-4">
                            <div class="text-center border-2 border-black rounded-xl">
                                <p>Consulting</p>
                            </div>
                            <div class="mt-2 text-lg text-black text-center">
                                <span>- David Clark</span>
                            </div>
                            <div class="mt-2 text-xl text-black text-center">
                                <h3>Skylar Davis's expertise and encouragement were crucial in helping me manage stress and achieve a healthier mindset.</h3>
                            </div>
                        </div>    
                    </div>
                    
                </div>
            </div>
        </div>
    </section> 
    {{-- Testimonials End --}} 
    {{-- Content End --}}

    {{-- Footer Start --}}
    <footer class="bg-primary mt-5 p-4">
        <div class="flex justify-between">
            <div>
                <a href="home">
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

    {{-- Script JS --}}
    <script>
        document.getElementById('hamburgToggle').addEventListener('click', function(){
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden')
        })
    </script>
    {{-- Script JS --}}
</body>
</html>