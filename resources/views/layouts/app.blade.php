@props([
  'seo' => [
    'title' => 'Rave Review Guru | Turn Reviews into Marketing Gold',
    'description' => 'We help small businesses collect, optimize, and leverage customer reviews. Simplify the ask, automate replies, and turn praise into AI-search-friendly proof.',
    'canonical' => url()->current(),
    'type' => 'website',
    'image' => asset('og/default.jpg'),
    'url' => url()->current(),
    'og_title' => null,
    'og_description' => null,
    'twitter_title' => null,
    'twitter_description' => null,
    'twitter_image' => null,
  ],
])

@php
    $title = $seo['title'] ?? 'Rave Review Guru — Reviews into Marketing Gold';
    $desc  = $seo['description'] ?? '';
    $canon = $seo['canonical'] ?? url()->current();
    $type  = $seo['type'] ?? 'website';
    $url   = $seo['url'] ?? url()->current();
    $img   = $seo['image'] ?? asset('og/default.jpg');

    $ogTitle = $seo['og_title'] ?? $title;
    $ogDesc  = $seo['og_description'] ?? $desc;

    $twTitle = $seo['twitter_title'] ?? $ogTitle;
    $twDesc  = $seo['twitter_description'] ?? $ogDesc;
    $twImg   = $seo['twitter_image'] ?? $img;

    $brand = [
    'name' => 'Rave Review Guru',
    'url' => 'https://ravereview.guru',
    'logo' => asset('images/avatar.webp'), // change to your real logo (min 112x112)
    'sameAs' => [
      // Add/remove as needed:
     // 'https://www.linkedin.com/in/scott-larsen',   // your LinkedIn
     // 'https://x.com/YourHandle',
     // 'https://www.youtube.com/@YourChannel',
      'https://www.reddit.com/user/RaveReviewGuru',
    ],
    'contact' => [
      'telephone' => '+1-707-347-4884',   // optional
      'email' => 'theguru@ravereview.guru', // optional
    ],
  ];
@endphp

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>
        <meta name="description" content="{{ $desc }}">
        <link rel="canonical" href="{{ $canon }}">

        {{-- Open Graph --}}
        <meta property="og:site_name" content="Rave Review Guru">
        <meta property="og:type" content="{{ $type }}">
        <meta property="og:title" content="{{ $ogTitle }}">
        <meta property="og:description" content="{{ $ogDesc }}">
        <meta property="og:url" content="{{ $url }}">
        <meta property="og:image" content="{{ $img }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">

        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $twTitle }}">
        <meta name="twitter:description" content="{{ $twDesc }}">
        <meta name="twitter:image" content="{{ $twImg }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @stack('styles') {{-- For page-specific styles --}}
        <link rel="icon" href="/images/favicon.svg" type="images/svg+xml"/>
    </head>
    <body class="text-gray-900 antialiased h-screen">
        <x-header />
        <!-- Start Content -->
        {{ $slot }}
        <!-- End Content -->
        <x-footer />
        @stack('scripts')
        @vite('resources/js/app.js')
        @livewireScripts
        <script type="application/ld+json">
            {!! json_encode([
              '@context' => 'https://schema.org',
              '@type' => 'Organization',
              'name' => $brand['name'],
              'url' => $brand['url'],
              'logo' => $brand['logo'],
              'sameAs' => array_values(array_filter($brand['sameAs'] ?? [])),
              'contactPoint' => array_filter([
                [
                  '@type' => 'ContactPoint',
                  'contactType' => 'customer support',
                  'email' => $brand['contact']['email'] ?? null,
                  'telephone' => $brand['contact']['telephone'] ?? null,
                  'areaServed' => 'US',
                  'availableLanguage' => ['English'],
                ],
              ], fn($cp) => !empty($cp['email']) || !empty($cp['telephone'])),
            ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
        </script>

        <script type="application/ld+json">
            {!! json_encode([
              '@context' => 'https://schema.org',
              '@type' => 'WebSite',
              'name' => $brand['name'],
              'url' => $brand['url'],
              'inLanguage' => 'en',
              'publisher' => [
                '@type' => 'Organization',
                'name' => $brand['name'],
                'logo' => [
                  '@type' => 'ImageObject',
                  'url' => $brand['logo'],
                ],
              ],
              // Sitelinks Search box (works if you have on-site search at /search?q=)
//              'potentialAction' => [
//                '@type' => 'SearchAction',
//                'target' => $brand['url'].'/search?q={search_term_string}',
//                'query-input' => 'required name=search_term_string',
//              ],
            ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
        </script>
    </body>
</html>
