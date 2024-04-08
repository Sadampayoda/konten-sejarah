<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f3f4f6;
        }

        nav {
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(207, 166, 75, 1) 50%, rgba(255, 255, 255, 1) 100%);
        }
    </style>
</head>

<body>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">

                        <span class="text-white text-lg font-semibold">Sejarah</span>
                    </div>
                </div>

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="{{ route('beranda.home') }}#hero"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Welcome</a>
                        <a href="{{ route('beranda.home') }}#about"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang
                            Kami</a>
                        <a href="{{ route('beranda.home') }}#services"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sejarah</a>
                        <a href="{{ route('beranda.home') }}#team"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Keanggotaan</a>
                        <a href="{{ route('beranda.home') }}#contact"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
                        <a href="{{ route('beranda.home') }}#contact"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <!-- Icon when menu is open. -->
                        <!-- Heroicon name: x -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>



        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('beranda.home') }}#hero"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Welcome</a>
                <a href="{{ route('beranda.home') }}#about"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang
                    Kami</a>
                <a href="{{ route('beranda.home') }}#services"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sejarah</a>
                <a href="{{ route('beranda.home') }}#team"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Keanggotaan</a>
                <a href="{{ route('beranda.home') }}#contact"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
                <a href="{{ route('beranda.home') }}#contact"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <div class="flex justify-center items-center h-screen">
        <form action="{{ route('beranda.validasi') }}" method="post">
            @csrf
            <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
                <div class="relative grid mx-4 mb-4 -mt-6 overflow-hidden text-white shadow-lg h-28 place-items-center rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 bg-clip-border shadow-gray-900/20">
                    <h3 class="block font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-white">
                        Sign In Admin
                    </h3>
                </div>
                <div class="flex flex-col gap-4 p-6">
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input name="email" type="email" class="w-full h-full px-3 py-3 font-sans text-sm font-normal transition-all bg-transparent border rounded-md peer border-blue-gray-200 border-t-transparent text-blue-gray-700 outline outline-0 placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " />
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Email
                        </label>
                    </div>
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input name="password" type="password" class="w-full h-full px-3 py-3 font-sans text-sm font-normal transition-all bg-transparent border rounded-md peer border-blue-gray-200 border-t-transparent text-blue-gray-700 outline outline-0 placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " />
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Password
                        </label>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <button type="submit" class="block w-full select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                        Sign In
                    </button>
                </div>
            </div>
        </form>
    </div>
    






































</body>

</html>
