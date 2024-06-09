{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawan - Lupa Password</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    {{-- Forget Password Start--}}
    <section id="forgetpassword" class="pt-32 pb-0">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <div class="max-w-md mx-auto mb-16">
                    <img src="asset/login/Logo.png" alt="Logo" width="250">
                    <h1 class="text-6xl my-4 font-Kanit font-semibold flex">LUPA PASSWORD</h1>
                    <div class="mb-0 text-sm text-gray-600">
                        {{ __('Masukkan email yang berhubungan dengan akunmu dan kami akan mengirim email serta panduan untuk mengatur ulang kata sandimu.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}" class="pt-4 flex items-center"> <!-- Added flex and items-center -->
                        @csrf

                        <div class="flex-1"> <!-- Added flex-1 -->
                            <x-input-label for="email" :value="__('Email')" class="font-Kanit" />
                            <x-text-input id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="email" name="email" :value="old('email')" placeholder="Masukan email kamu...." required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="ml-4 pt-4"> <!-- Added ml-4 for spacing -->
                            <x-primary-button class="font-Kanit text-white bg-secondery hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-8 py-3.5 text-center hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                                {{ __('Kirim') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <div class="flex justify-center mt-20">
                        <h1>Sudah mengetahui sandimu? <a href="{{ route('login') }}"><span class="cursor-pointer underline">Login disini</span></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Forget Password End --}}
</body>

</html>


