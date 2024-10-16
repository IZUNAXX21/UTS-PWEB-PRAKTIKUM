<nav
    class="w-full max-w-full bg-gradient-to-r from-black via-gray-900 to-blue-900 text-gray-100 rounded-xl px-4 py-3 border border-white shadow-[0_0_10px_rgba(255,255,255,0.3)] transition-shadow duration-300 hover:shadow-[0_0_15px_rgba(255,255,255,0.5)]">
    <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex flex-col">
            <nav aria-label="breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li class="flex items-center text-gray-300 hover:text-purple-400 transition-colors">
                        <a href="#" class="opacity-80 hover:opacity-100">Dashboard</a>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="flex items-center text-gray-300 hover:text-purple-400 transition-colors">
                        @yield('kategori')
                    </li>
                </ol>
            </nav>
            <h6 class="text-white font-semibold">@yield('judul')</h6>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative w-56">
                <input type="text" placeholder="Search here"
                    class="w-full h-10 px-4 py-2 bg-transparent border border-gray-400 rounded-lg text-white placeholder-gray-400 focus:border-purple-500 focus:outline-none transition">
            </div>

            <a href="#">
                <button
                    class="hidden xl:flex items-center gap-2 px-4 py-2 text-xs text-white bg-transparent border border-gray-400 rounded-lg hover:bg-purple-600 hover:border-purple-600 transition">
                    <img src="{{ url('storage/asset/ayano.jpeg') }}" class="h-5 w-5 rounded-full"
                        alt="Deskripsi Gambar">
                    Hi Izuna!
                </button>
            </a>


            <button
                class="w-10 h-10 xl:hidden flex items-center justify-center text-white hover:bg-purple-600 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
