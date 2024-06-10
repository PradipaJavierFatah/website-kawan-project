{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawan - Reset Password</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="hidden md:block absolute inset-y-0 right-0 w-1/2 bg-secondery z-0"></div>

    {{-- Reset Password Start --}}
    <section id="ResetPassword" class="pt-32 pb-0">
        <div class="container mx-auto flex">
            <div class="w-full lg:w-1/2 px-4">
                <div class="w-full lg:w-2/3 p-6 mx-auto">
                    <img src="/asset/login/Logo.png" alt="Logo" width="250">
                    <h1 class="text-2xl my-4 font-Kanit font-semibold">Reset Password</h1>

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="font-Kanit" />
                            <x-text-input id="email" class="block mt-1 w-full font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="Masukan email kamu..." />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class="font-Kanit" />
                            <x-text-input id="password" class="block mt-1 w-full font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="password" name="password" required autocomplete="new-password" placeholder="Masukan password baru kamu..." />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-Kanit" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi password baru kamu..." />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="font-Kanit text-white bg-primary hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden lg:block w-1/2 flex items-center justify-center z-10">
                <img src="/asset/login/forgetpass.png" alt="Gambar Login" class="mx-auto pt-18" width="500">
            </div>
        </div>
    </section>
    {{-- Reset Password End --}}

    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = 'home'; // Redirect to the home page
        });
    </script>
</body>

</html>

