<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1Tracker — @yield('title', 'Personal Telemetry & Race Log')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F8F4F0;
            color: #1F2937;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col justify-between selection:bg-[#EE2A26] selection:text-white">

    {{-- Tampilkan Navbar hanya jika bukan di halaman Login --}}
    @if (!Request::is('/'))
        <x-navbar :username="$username ?? 'Guest Strategist'" />
    @endif

    {{-- Area Konten Utama (@yield - 3 Poin) --}}
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    {{-- Memanggil Footer dengan @include (5 Poin) --}}
    @include('components.footer')

</body>

</html>
