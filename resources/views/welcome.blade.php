<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>OCD MIMAROPA IMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 antialiased font-sans">
    <header class="bg-blue-800 text-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">OCD MIMAROPA IMS</h1>
            <nav class="space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-orange-400">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-orange-400">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 ml-2">Register</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <main class="py-16">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-blue-800 mb-4">Welcome to the</h2>
            <h3 class="text-3xl font-semibold text-orange-500 mb-6">OCD MIMAROPA Inventory Management System (IMS)</h3>
            <p class="text-gray-700 mb-8">
                This system helps OCD MIMAROPA track and manage inventory items efficiently, ensuring smooth operations and real-time reporting.
            </p>
            <a href="{{ route('login') }}" class="inline-block bg-blue-800 text-white px-6 py-3 rounded hover:bg-blue-900 transition">
                Get Started
            </a>
        </div>
    </main>

    <footer class="text-center py-6 text-sm text-gray-600">
        &copy; {{ date('Y') }} OCD MIMAROPA. All rights reserved.
    </footer>
</body>
</html>
