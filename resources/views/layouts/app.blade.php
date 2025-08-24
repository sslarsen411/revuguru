<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} Subscriptions</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @stack('styles') {{-- For page-specific styles --}}
        <link rel="icon" href='images/favicon.svg'" type="images/svg+xml"/>        
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-zinc-50  text-dark ">
            <!-- Start Content -->
            <div class="flex items-center w-full bg-hero bg-no-repeat bg-cover h-[60vh]">                        
                <div class="p-10 flex flex-col items-center w-full ">
                    
                    <div class="max-w-3/4 mx-auto w-full">                               
                        {{ $slot }}                               
                    </div>
                   
                </div>
               
            </div>
            <!-- End Content -->
        </div> 
        @vite('resources/js/app.js')
        @livewireScripts
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@11"])
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @stack('scripts')
    </body>
</html>
