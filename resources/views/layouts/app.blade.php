<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Meta Tags for SEO  English -->
    <meta name="description" content="International Scientific Conference 20 years of NATO in Bulgaria. Organizer and host  - The Rakovski National Defence College - policies, analyses, strategy, forecasts.">
    <meta name="keywords" content="Military, academy, business, national, security, research, Bulgarian, foreign, conferences,
Academy, NATO, Black Sea, region, economic, defense, policies, strategies, leadership, research, analysis, forecasts, interoperability">
    <meta name="author" content="The Rakovski National Defence College">
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">

    <!-- Meta Tags for SEO Bulgarian -->
    <meta name="description" content="Международна, научна конференция 20 години НАТО в България. Организатор и
        домакин Военна Академия Г.С.Раковски - политики, анализи, стратегия, прогнози.">
    <meta name="keywords"
        content="Военна, академия, дело, национална, сигурност, научноизследователски, български, чуждестранни, конференции,
	Академия, НАТО, Черноморския, регион, икономически, отбранителни, политики, стратегии, лидерство, изследвания, анализи, прогнози, оперативна съвместимост">
    <meta name="author" content="Военна академия „Г. С. Раковски“">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">

    <!-- Open Graph Meta Tags (for social media) English -->
    <meta property="og:title" content="Военна академия „Г. С. Раковски“">
    <meta property="og:description" content="Международна, научна конференция 20 години НАТО в България. Организатор
        и домакин Военна Академия Г.С.Раковски - политики, анализи, стратегия, прогнози.">
    <!-- <meta property="og:image" content="http://example.com/image.jpg">--> <!-- URL to your image -->
    <meta property="og:url" content="https://rndc.bg/">
    <meta property="og:type" content="website">

    <!-- Open Graph Meta Tags (for social media) Bulgarian -->
	<meta property="og:title" content="The Rakovski National Defence College">
    <meta property="og:description" content="International Scientific Conference 20 years of NATO in Bulgaria. Organizer and host  - The Rakovski National Defence College - policies, analyses, strategy, forecasts.">
    <!-- <meta property="og:image" content="http://example.com/image.jpg">--> <!-- URL to your image -->
    <meta property="og:url" content="https://rndc.bg/">
    <meta property="og:type" content="website">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
