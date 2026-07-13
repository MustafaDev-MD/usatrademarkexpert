<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', config('app.name'))
    </title>

    <meta name="description" content="@yield('description', 'USA Trademark Expert provides trademark registration, filing, search, monitoring, and brand protection services across the United States.')">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Swiper --}}
    @if (request()->routeIs(['services']))
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/14.0.5/swiper-bundle.css" integrity="sha512-HzzVyHjdSqlQozYsyluJuVB46RSGoA0nMAGVSUHvArn6n9AIIh5UNYAYvkMVwGw1aCm9sfuX/fIreUw735hyAQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endif

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
</head>

<body class="bg-[#F9F8F5] text-gray-900 antialiased">

    {{-- Header --}}
    @include('frontend.partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.partials.footer')


    @livewireScripts

    {{-- Swiper --}}
    @if (request()->routeIs(['services']))
    <!-- Swiper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/14.0.5/swiper-bundle.min.js" integrity="sha512-qTRdxsJPjpD3fghHhsoPvh3jkC9v/2Se/V+rq0hHoQYTw2IXcjdphRapfLMsgKnBw95kkazAH2ERMPYxtwMJUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        new Swiper(".testimonialSwiper", {

            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            grabCursor: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
    </script>
    @endif
</body>

</html>