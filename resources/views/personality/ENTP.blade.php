<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ENTP Personality</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset ('css/personality/output.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">

    <link href="output.css" rel="stylesheet" />
    <link rel="stylesheet" href="coba.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      .fade-in {
        animation: fadeIn 2s ease-in-out;
      }
      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .hover-scale:hover {
        transform: scale(1.05);
      }
    </style>
  </head>
  <body class="bg-pink-50 font-sans leading-normal tracking-normal">
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
                <a href="home-after">Services</a>
            </li>
            <li class="text-xl font-bold cursor-pointer hover:underline">
                <a href="plans-login">Payments</a>
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

    <section class="bg-purple-300 p-8 flex items-center justify-center fade-in">
      <div class="flex items-center">
        <div class="ml-6 text-white text-center md:text-left">
          <h1 class="text-4xl md:text-6xl font-bold">Congratulations!</h1>
        </div>
      </div>
    </section>

    <section class="p-8 flex flex-col justify-center items-center fade-in">
      <img src="asset/personality/ENTP.png" alt="Large Image" class="w-full max-w-2xl" />
      <span
        class="font-bold text-green-500 text-8xl mt-4 justify-center items-center"
        >ENTP</span
      >
    </section>

    <section class="p-6 bg-pink-custom fade-in">
      <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold">What is an ENTP?</h2>
        <p class="mt-4 text-base md:text-lg">
          ENTP dikenal karena kecerdasan dan pesona mereka yang cepat, serta
          kecintaan mereka pada debat. Mereka adalah pemikir inovatif yang
          senang mengeksplorasi ide-ide baru dan menantang keadaan yang ada.
          Dengan kemampuan alami untuk melihat hubungan dan pola, ENTP sangat
          pandai memecahkan masalah dan sering dianggap sebagai "visioner" di
          antara berbagai tipe kepribadian.
        </p>
      </div>
    </section>

    <section class="p-6 bg-white fade-in">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
          Benefits of Being an ENTP
        </h2>
        <ul class="mt-4 text-base md:text-lg text-pink-custom space-y-4">
          <li>
            1. ENTP memiliki kemampuan luar biasa dalam memecahkan masalah dan
            berpikir secara inovatif.
          </li>
          <li>
            2. Mereka sangat mahir dalam berkomunikasi dan memiliki karisma yang
            kuat.
          </li>
          <li>
            3. ENTP memiliki kualitas kepemimpinan alami dan mampu menginspirasi
            orang lain.
          </li>
          <li>
            4. Mereka sangat adaptif dan cerdik dalam menghadapi berbagai
            situasi.
          </li>
          <li>
            5. ENTP termotivasi untuk mengejar dan mencapai tujuan yang
            ambisius.
          </li>
        </ul>
      </div>
    </section>

    <div
      class="flex justify-center my-8 transition-colors duration-300 fade-in"
    >
      <button
        id="downloadButton"
        class="bg-[#F2789F] text-white py-2 px-4 rounded-lg transition-transform transform hover:scale-110 hover:bg-pink-700"
      >
        Download ENTP
      </button>
    </div>

    <section class="p-6 text-purple-400 bg-white text-center fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
        Deep dive ENTP
      </h2>
    </section>

    <section class="relative bg-purple-300 p-8 fade-in">
      <div class="backdrop-blur-lg bg-white bg-opacity-20 p-6 rounded-lg">
        <div class="max-w-4xl mx-auto text-center text-white">
          <h2 class="text-3xl md:text-4xl font-bold">
            What does ENTP stand for?
          </h2>
          <p class="mt-4 text-base md:text-lg">
            ENTPs are enthusiastic, creative, and sociable free spirits. They
            can always find a reason to smile. ENTPs are known for their quick
            wit and intellectual curiosity. They are driven by the desire to
            understand the world around them. These individuals are strategic
            and love to brainstorm and think big. Their energy and enthusiasm
            can be infectious and they are often seen as inspiring leaders.
            However, they can also be prone to procrastination and may struggle
            with follow-through on their many ideas. They thrive in dynamic
            environments where they can challenge the status quo and explore new
            possibilities. ENTPs are natural debaters and enjoy engaging in
            lively discussions. They are also adaptable and can pivot quickly
            when needed. Overall, ENTPs bring a sense of innovation and
            excitement to any team or project they are part of.
          </p>
          <h2 class="mt-6 text-3xl md:text-4xl font-bold">
            Career Paths for ENTPs
          </h2>
          <p class="mt-4 text-base md:text-lg">
            ENTPs are well-suited for careers that involve innovation,
            problem-solving, and strategic thinking. Some ideal job roles
            include:
          </p>
          <ul class="mt-4 text-base md:text-lg space-y-4">
            <li>1. Entrepreneur</li>
            <li>2. Marketing Manager</li>
            <li>3. Consultant</li>
            <li>4. Lawyer</li>
            <li>5. Inventor</li>
            <li>6. Public Relations Specialist</li>
          </ul>
        </div>
      </div>
      <div
        class="absolute inset-0 flex items-center justify-center backdrop-blur-lg"
      >
        <button
          class="bg-white bg-opacity-70 rounded-full p-4 hover:bg-opacity-100 transition"
          onclick="location.href='next_steps.html'"
        >
          <img
            src="asset/personality/locked-padlock.png"
            alt="Key Icon"
            class="h-12 w-12"
          />
        </button>
      </div>
    </section>

    <script>
      document
        .getElementById("downloadButton")
        .addEventListener("click", function () {
          const fileUrl = "/asset/personality/ENTP.pdf";

          const link = document.createElement("a");
          link.href = fileUrl;
          link.download = "ENTP.pdf";

          document.body.appendChild(link);

          link.click();

          document.body.removeChild(link);
        });
    </script>

    <footer class="bg-primary mt-5 p-4">
      <div class="flex justify-between">
        <div>
          <a href="homeafter">
            <img
              src="/asset/home/logo.png"
              alt="Kawan"
              class="h-12 w-auto"
            />
          </a>
        </div>

        <div class="flex flex-row space-x-12">
          <div class="">
            <h2 class="text-2xl font-bold">Tentang Kawan</h2>
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
            <h2 class="text-2xl font-bold">Find Us On</h2>
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

      <hr class="my-6 border-gray-800" />

      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm sm:text-center">
          © 2023 Kawan™ All Rights Reserved.
        </span>
        <div class="flex mt-4">
          <a href="https://instagram.com" class="text-black" target="_blank">
            <img
              src="/public/asset/home/instagram.png"
              alt="Instagram"
              class="h-6 w-6"
            />
            <span class="sr-only">Instagram page</span>
          </a>
          <a href="https://x.com" class="ms-5">
            <img
              src="/public/asset/home/twitter.png"
              alt="Twitter/X"
              class="h-6 w-6"
            />
            <span class="sr-only">Twitter/X page</span>
          </a>
          <a href="https://facebook.com" class="ms-5 me-10">
            <img
              src="/public/asset/home/facebook.png"
              alt="Facebook"
              class="h-6 w-6"
            />
            <span class="sr-only">Facebook account</span>
          </a>
        </div>
      </div>
    </footer>
  </body>
</html>
