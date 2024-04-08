<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background: #eee">
    <div
        class="sidebar bg-gray-800 text-white h-screen w-64 fixed top-0 left-0 overflow-y-auto z-50 transition-transform duration-300 transform">

        <div class="p-4 ">
            <h2 class="text-lg mb-4 border-b pb-2 font-semibold">Sidebar Title</h2>


            <ul class="space-y-2">
                <li>
                    <a href="{{ route('sejarah.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Sejarah
                    </a>
                </li>
                <li>
                    <a href="{{ route('keanggotaan.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Keanggotaan
                    </a>
                </li>
                <li>
                    <a href="{{ route('artikel.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Artikel
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeri.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Galery
                    </a>
                </li>
                <li>
                    <a href="{{ route('kontak.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Kontaks
                    </a>
                </li>
                <li>
                    <a href="{{ route('medsos.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Media Sosial
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Buat Akun Admin
                    </a>
                </li>
                <li>
                    <a href="{{ route('beranda.home') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Beranda 
                    </a>
                </li>
                <li>
                    <a href="{{ route('beranda.logout') }}"
                        class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                        Logout 
                    </a>
                </li>
            </ul>
        </div>


    </div>



    <div id="toggleContainer" class="fixed top-0 left-0 mt-0 ml-14 z-50 transition duration-300 ease-in-out">
        <button id="toggleSidebar"
            class="block py-2 px-4 rounded bg-gray-700 text-white transition duration-200 hover:bg-gray-600 transform -translate-x-full">

            <span id="toggleIcon">&#9776;</span>
        </button>
    </div>


    <div id="mainContent" class="ml-15 transition duration-300 ease-in-out">
        @yield('content')
    </div>


    <script>
        const toggleSidebarBtn = document.getElementById('toggleSidebar');
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleIcon = document.getElementById('toggleIcon');
        const toggleContainer = document.getElementById('toggleContainer');

        toggleSidebarBtn.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
            if (sidebar.classList.contains('-translate-x-full')) {
                toggleIcon.innerHTML = '&#9776;';
                mainContent.classList.remove('ml-64');
                toggleContainer.classList.remove('ml-64');
                toggleSidebarBtn.classList.remove('translate-x-0');
            } else {
                toggleIcon.innerHTML = '&#10006;';
                mainContent.classList.add('ml-67');
                toggleContainer.classList.add('ml-64');
                toggleSidebarBtn.classList.add('translate-x-0');
            }
        });
    </script>
</body>

</html>
