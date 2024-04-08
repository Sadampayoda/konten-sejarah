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
                        <a href="#hero"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Welcome</a>
                        <a href="#about"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang
                            Kami</a>
                        <a href="#services"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sejarah</a>
                        <a href="#team"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Keanggotaan</a>
                        <a href="#contact"
                            class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
                        <a href="#contact"
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
                <a href="#hero"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Welcome</a>
                <a href="#about"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang
                    Kami</a>
                <a href="#services"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sejarah</a>
                <a href="#team"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Keanggotaan</a>
                <a href="#contact"
                    class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
                <a href="#contact"
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

    <section id="hero" class="hero mb-20 pb-20  bg-gray-100 flex items-center mt-5">

        <div class="max-w-screen-xl mx-auto pt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="col-span-1 md:col-span-1">
                    <h3 class="fade-up mb-4 text-2xl md:text-3xl">Official Website</h3>
                    <h1 class="fade-up mb-6 text-4xl md:text-5xl font-bold">SEJARAH</h1>
                    <h5 class="fade-up mb-8 text-lg md:text-xl text-gray-700">Website portal ikatan Alumni Universitas
                        Diponegoro sebagai media silaturahmi, komunikasi, dan informasi sesama alumni Universitas
                        Diponegoro di manapun berada.</h5>
                    <div class="fade-up">
                        <div class="text-center md:text-left">
                            <a href="#services"
                                class=" border border-black rounded-md py-2 px-4 bg-gradient-to-r from-yellow-500 via-yellow-400 to-white">
                                <span class="mr-2 text-white">Lihat Sejarah</span>
                                <i class="bi bi-arrow-right text-white"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-1">
                    <div class="hero-img zoom-out">
                        <img src="{{ asset('image/beranda/beranda.png') }}" class="w-full" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="about" class="about pb-20 mt-20 pt-20 bg-white">

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

                <div class="col-lg-6 flex flex-col justify-center">
                    <div class="content bg-blue-100 p-9">
                        <h3 class="text-2xl md:text-3xl">Tentang Kami</h3>
                        <p class="mt-4 text-gray-700">
                            Website portal ikatan Alumni Universitas Diponegoro sebagai media silaturahmi, komunikasi,
                            dan informasi sesama alumni Universitas Diponegoro di manapun berada.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 flex items-center">
                    <img src="{{ asset('image/beranda/sejarah.jpg') }}" class="w-full md:mx-auto" alt="">
                </div>

            </div>
        </div>

    </section>

    <section id="services" class="services mt-12 pt-10 pb-20 mb-20">

        <div class="container mx-auto">
            <header class="section-header text-center mb-20 pb-12">
                <h2 class="">Kumpulan Sejarah</h2>
                <p class="text-3xl md:text-4xl font-bold">Beberapa Sejarah dari portal website kami</p>
            </header>
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 ms-5 me-5 bg-white shadow-md p-10">
                @foreach ($sejarah as $item)
                    <a href="{{ route('beranda.sejarah', ['id' => $item->id]) }}"
                        class="text-start transform transition-transform duration-300 hover:scale-105">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-box bg-white rounded-md p-6 shadow-md">
                                <i class="ri-archive-drawer-fill icon text-3xl"></i>
                                <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
                                <p>{{ $item->text }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </section>

    <section id="portfolio" class="portfolio bg-white py-16">

        <div class="container mx-auto ">

            <header class="section-header text-center mb-20  mb-10">
                <h2 class="">Galeri Foto</h2>
                <p class="text-3xl md:text-4xl font-bold">Beberapa Galeri yang berhubungan dengan sejarah</p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ms-5 me-5">

                @foreach ($galerry as $item)
                    @if ($item->fileType == 'image')
                        <div class="portfolio-item">
                            <div class="portfolio-wrap bg-white rounded-lg overflow-hidden">
                                <img src="{{ asset($item->image_url) }}" class="w-full" alt="Foto Kegiatan 1">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

    </section>

    <section id="team" class="team bg-gray-100 py-16">
        <div class="container mx-auto">
            <header class="section-header text-center mb-10">
                <h2 class="">Keanggotaan</h2>
                <p class="text-3xl md:text-4xl font-bold">Profile Anggota Kepengurusan Sejarah</p>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 me-5 ms-5">
                @foreach ($keanggotaan as $item)
                    <div
                        class="col-span-1 relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                            <img src="{{ asset($item->photo) }}" alt="card-image" />
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $item->nama }}
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                Saya adalah seorang mahasiswa dengan NIM {{ $item->nim }}, berasal dari provinsi
                                {{ $item->provinsi }}. Saya bekerja sebagai seorang {{ $item->profesi }} di
                                {{ $item->asal_institusi }}. Saya juga telah berpengalaman menjadi narasumber sebanyak
                                {{ $item->narasumber }} acara, menulis sebanyak {{ $item->custom_jurnal }} jurnal, dan
                                supervisor sebanyak {{ $item->supervisor }}.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <a href="{{ route('beranda.keanggotaan') }}"
                                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section id="berita" class="berita bg-white py-16">
        <div class="container mx-auto">
            <header class="section-header text-center mb-10">
                <p class="">Artikel</p>
                <h2 class="text-3xl md:text-4xl font-bold">Kumpulan portal Berita Sejarah</h2>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 ms-5 me-5 border-gray-400">
                @foreach ($artikel as $item)
                    <div
                        class="relative flex flex-col md:flex-row bg-clip-border shadow-lg border border-solid border-gray-400 rounded-xl bg-white text-gray-700 shadow-md w-full max-w-[48rem]">
                        <div
                            class="relative w-full md:w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none bg-clip-border rounded-xl shrink-0">
                            <img src="{{ asset($item->image) }}" alt="card-image"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <h6
                                class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-gray-700 uppercase">
                                Berita tanggal {{ $item->created_at }}
                            </h6>
                            <h4
                                class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $item->title }}
                            </h4>
                            <p
                                class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                                {{ $item->text }}
                            </p>
                            <a href="#" class="inline-block">
                                <a href="{{ route('beranda.artikel', ['id' => $item->id]) }}"
                                    class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </a>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact bg-gray-100 py-16">

        <div class="container mx-auto ms-5 me-5" data-aos="fade-up">

            <header class="section-header text-center mb-8">
                <h2 class="">Contact</h2>
                <p class="text-3xl">Contact Us</p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="col-lg-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($kontak as $item)
                            <div class="info-box flex items-center">
                                <i class="bi bi-geo-alt text-primary text-2xl mr-2"></i>
                                <div>
                                    <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                                    <p>{{ $item->message }}<br>{{ $item->email }}</p>
                                </div>
                            </div>
                        @endforeach



                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="grid grid-cols-1 gap-4 me-5">
                        <img src="{{ asset('image/beranda/sejarah.jpg') }}" class="w-full md:mx-auto"
                            alt="">
                    </div>


                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->




    <section>

        <footer id="footer" class="footer bg-gray-800 text-gray-300">

            <div class="footer-top py-12 mt-5 ">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="footer-info ">
                            <h2 class="ms-3 mb-3">Sosial Media</h2>
                            <div class="social-links ms-3">
                                @foreach ($medsos as $item)
                                    <a href="#" class="inline-block mr-3">{{ $item->platform }}</a>
                                @endforeach

                            </div>
                        </div>

                        <div class="footer-links">
                            <h4 class="mb-4">Useful Links</h4>
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Tentang
                                        Kami</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i>
                                        Layanan</a>
                                </li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Terms of
                                        service</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Privacy
                                        policy</a></li>
                            </ul>
                        </div>

                        <div class="footer-links">
                            <h4 class="mb-4">Layanan</h4>
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i>
                                        Pemutakhiran
                                        Data</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Rumah
                                        Alumni</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Informasi
                                        Kegiatan</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Citra
                                        Almamater</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Sarana
                                        Berkarya</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right inline-block mr-2"></i> Kegiatan
                                        Sosial</a></li>
                            </ul>
                        </div>

                        <div class="footer-contact">
                            <h4 class="mb-4">Contact Us</h4>
                            <p class="text-center md:text-left">
                                Jl. Lembang 47, Menteng <br>
                                Indonesia <br><br>
                                <strong>Phone:</strong> 0815-11-777-999<br>
                                <strong>Email:</strong> info@ikaundipjakarta.org<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
































</body>

</html>
