<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-screen bg-gradient-to-b from-black via-gray-900 to-blue-900">
        <!-- Sidebar -->
        <div
            class="fixed inset-y-0 left-0 z-50 w-64 my-4 ml-4 h-[calc(100vh-32px)] bg-gradient-to-br from-black via-gray-900 to-blue-900 rounded-xl border border-white shadow-[0_0_10px_rgba(255,255,255,0.3)] hover:shadow-[0_0_15px_rgba(255,255,255,0.5)] transition-all duration-300 -translate-x-full xl:translate-x-0 overflow-hidden">
            @include('admin.layouts.sidebar')
        </div>

        <div class="xl:ml-72 transition-all duration-300">
            <div class="p-4">
                @include('admin.layouts.navbar')
            </div>

            <div class="mt-8 p-4 text-white">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
