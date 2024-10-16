<aside
    class="bg-gradient-to-br from-black via-gray-900 to-blue-900 -translate-x-60 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-60 rounded-xl transition-transform duration-300 xl:translate-x-0">
    <div class="relative border-b border-white/20">
        <a class="flex items-center gap-2 py-4 px-4" href="#">
            <h6 class="block antialiased tracking-normal font-sans text-sm font-semibold leading-relaxed text-white">
                Pengolahan Data Kontak</h6>
        </a>
    </div>
    <div class="m-2">
        <ul class="mb-4 flex flex-col gap-1">
            <li>
                <a href="{{ route('admin.dashboard.index') }}">
                    <button
                        class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 rounded-lg w-full flex items-center gap-2 px-3 capitalize 
                        {{ Route::is('dashboard') ? 'bg-gradient-to-tr from-indigo-700 to-indigo-500 text-white shadow-md shadow-indigo-500/20' : 'text-white hover:bg-white/10 active:bg-white/30' }}">
                        <svg class="h-4 w-4 text-white-800" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="8.5" cy="7" r="4" />
                            <line x1="20" y1="8" x2="20" y2="14" />
                            <line x1="23" y1="11" x2="17" y2="11" />
                        </svg>
                        <p
                            class="block antialiased font-sans text-sm leading-relaxed text-inherit font-medium capitalize">
                            Contact</p>
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.profile.index') }}">
                    <button
                        class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 rounded-lg w-full flex items-center gap-2 px-3 capitalize
                        {{ Route::is('admin.contact.index') ? 'bg-gradient-to-tr from-indigo-700 to-indigo-500 text-white shadow-md shadow-indigo-500/20' : 'text-white hover:bg-white/10 active:bg-white/30' }}">
                        <svg class="h-4 w-4 text-white-900" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                            <line x1="12" y1="9" x2="12" y2="13" />
                            <line x1="12" y1="17" x2="12.01" y2="17" />
                        </svg>
                        <p
                            class="block antialiased font-sans text-sm leading-relaxed text-inherit font-medium capitalize">
                            Ini Tentang Gwehj</p>
                    </button>
                </a>
            </li>
        </ul>
    </div>
    <div class="h-px my-4 bg-white/20"></div>
    <div class="mt-auto m-2">
        <ul class="flex flex-col gap-1">
            <li>
                <a href="{{ route('login') }}">
                    <button
                        class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 rounded-lg w-full flex items-center gap-2 px-3 capitalize text-white hover:bg-white/10 active:bg-white/30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 text-inherit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-9A2.25 2.25 0 002.25 5.25v13.5A2.25 2.25 0 004.5 21h9a2.25 2.25 0 002.25-2.25V15M18 9l3 3m0 0l-3 3m3-3H9">
                            </path>
                        </svg>

                        <p
                            class="block antialiased font-sans text-sm leading-relaxed text-inherit font-medium capitalize">
                            Sign Out</p>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</aside>
