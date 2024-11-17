{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-blue-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify-Email</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

<body>
    {{-- Verifikasi Email Start --}}
    <section id="verifikasiemail" class="flex items-center justify-center min-h-screen">
        <div class="container mx-auto flex justify-center">
            <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden mb-6 border-2 border-black p-8">
                <div class="flex justify-center mb-4">
                    <img src="asset/login/Logo.png" alt="Logo Kawan" class="w-32 h-auto">
                </div>
                <div class="mb-4 text-base text-grey-600">
                    {{ __('Makasih udah daftar! Sebelum mulai, cek email kamu dan klik link verifikasi yang baru aja kita kirim. Kalo gak dapet emailnya, kita bisa kirim ulang buat kamu.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('Link verifikasi baru udah dikirim ke email yang kamu masukin pas daftar.') }}
                    </div>
                @endif

                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <x-primary-button>
                                {{ __('Kirim Ulang Email Verifikasi') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('logout') }}
                        </button>
                    </form>
                    {{-- <a href={{ route('login') }}><span class="underline">Login</span></a> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- Verifikasi Email End --}}
</body>

</html>
