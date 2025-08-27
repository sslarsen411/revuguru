<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Rave Review') }} </title>
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @stack('styles') {{-- For page-specific styles --}}
        <link rel="icon" href="/images/favicon.svg" type="images/svg+xml"/>
    </head>
    <body class="font-sans text-gray-900 antialiased h-screen">
        <x-header />
        <!-- Start Content -->
        {{ $slot }}
        <!-- End Content -->
        <x-footer />
        @vite('resources/js/app.js')
        @livewireScripts
    </body>
</html>
