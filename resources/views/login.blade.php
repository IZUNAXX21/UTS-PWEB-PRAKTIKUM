<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Here</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-gradient-to-b from-black via-blue-900 to-purple-900 flex justify-center items-center h-screen">
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('storage/asset/bg.gif') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-3xl font-semibold mb-4 text-white">Login</h1>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-gray-300">Username</label>
                    <input type="text" id="username" name="username"
                        class="w-full border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400 bg-gray-800 text-white"
                        autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-300">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400 bg-gray-800 text-white"
                        autocomplete="off">
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="text-blue-500">
                    <label for="remember" class="text-gray-300 ml-2">Remember Me</label>
                </div>
                <div class="mb-6 text-blue-300">
                    <a href="#" class="hover:underline">Forgot Password?</a>
                </div>
                <a href="{{ route('admin.dashboard.index') }}"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white font-semibold rounded-md py-2 px-4 w-full text-center block">
                    Login
                </a>
            </form>
            <div class="mt-6 text-blue-400 text-center">
                <a href="#" class="hover:underline">Sign up Here</a>
            </div>
        </div>
    </div>
</body>

</html>
