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
                        @if (auth()->user())
                            <a href="{{ route('user.index') }}"
                                class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Dashboard Admin</a>
                        @else
                            <a href="{{ route('beranda.login') }}"
                                class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Admin
                                Login</a>
                        @endif
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
                @if (auth()->user())
                    <a href="{{ route('user.index') }}"
                        class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Dashboard Admin</a>
                @else
                    <a href="{{ route('beranda.login') }}"
                        class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Admin
                        Login</a>
                @endif
            </div>
        </div>
    </nav>


    <div class="grid grid-cols-1 sm:grid-cols-2 mt-5 ms-5 me-5 md:grid-cols-3 gap-5">
        @foreach ($data as $item)
            <div class="flex flex-col rounded-xl bg-white shadow-lg">
                <div class="relative overflow-hidden bg-blue-gray-500 shadow-blue-gray-500/40 border border-gray-300">
                    <img src="{{ asset($item->photo) }}" alt="ui/ux review check" class="object-cover w-full h-64">
                    <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-transparent to-black/60"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h5 class="text-xl font-medium text-blue-gray-900">{{ $item->nama }}</h5>
                    </div>
                    <div class="mb-4">
                        <h6 class="font-bold text-xl mb-2">Biodata</h6>
                        <p class="text-gray-700">
                            <span class="block">NIM: {{ $item->nim }}</span>
                            <span class="block">Provinsi: {{ $item->provinsi }}</span>
                        </p>
                    </div>
                    <div class="mb-4">
                        <h6 class="font-bold text-xl mb-2">Keahlian</h6>
                        <p class="text-gray-700">
                            <span class="block">Profesi: {{ $item->profesi }}</span>
                            <span class="block">Asal Institusi: {{ $item->asal_institusi }}</span>
                        </p>
                    </div>
                    <div>
                        <h6 class="font-bold text-xl mb-2">Pengalaman</h6>
                        <p class="text-gray-700">
                            <span class="block">Narasumber: {{ $item->narasumber }}</span>
                            <span class="block">Custom Jurnal: {{ $item->custom_jurnal }}</span>
                            <span class="block">Supervisor: {{ $item->supervisor }}</span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>










































</body>

</html>
