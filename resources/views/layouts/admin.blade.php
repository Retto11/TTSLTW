<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <nav class="bg-indigo-600 text-white px-4 py-2 shadow">
        <div class="max-w-7xl mx-auto flex justify-between">
            <div><strong>Trang quản trị</strong></div>
            <div class="flex items-center space-x-4">
                @if (Auth::check())
                    <p class="text-end">Chào mừng, <strong>{{ Auth::user()->name }}</strong>!</p>
                @else
                    <p class="text-end">Bạn chưa đăng nhập.</p>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="underline text-white hover:text-gray-300">
                        Đăng xuất
                    </button>
                </form>
            </div>
        </div>
    </nav>
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-2 text-center">
            {{ session('success') }}
        </div>
    @endif

    <main class="max-w-6xl mx-auto mt-8 px-4">
        @yield('content')
    </main>
</body>

</html>