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

    <div class="flex justify-between max-w-5xl mx-auto mt-8">
        <!-- Card Utama -->
        <div class="w-3/4 mr-4">
            <div class="max-w-3xl bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Foto -->
                <div class="w-full h-96">
                    <img class="w-full h-full object-cover" src="{{ asset($data->image) }}" alt="">
                </div>
                <!-- Konten -->
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $data->title }}</h2>
                    <p class="mt-4 text-gray-600">{{ $data->content }}.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div>
                            <span class="text-sm font-semibold text-gray-600">Tanggal: {{ $data->created_at }}</span>
                        </div>
                        <a href="{{ route('beranda.sejarah', ['id' => $data->id + 1]) }}"
                            class="text-blue-500 hover:text-blue-600">Baca lainnya...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Rekomendasi -->
        <div class="w-1/2">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Rekomendasi Konten</h2>
                <!-- List Rekomendasi -->
                <ul>
                    @foreach ($rekomendasi as $item)
                        <li class="mb-4 flex">
                            <div class="w-16 h-16 flex-shrink-0 bg-gray-300 rounded-md mr-4">

                                <img class="w-full h-full object-cover" src="{{ asset($item->image) }}" alt="">

                            </div>
                            <div>
                                <a href="#" class="text-blue-500 hover:text-blue-600">{{ $item->title }}</a>
                                <p class="text-gray-600">Tanggal: {{ $item->created_at->format('Y-m-d') }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>







































</body>

</html>
