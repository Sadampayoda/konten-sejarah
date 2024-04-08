<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar bg-gray-800 text-white h-screen w-64 fixed top-0 left-0 overflow-y-auto z-50 transition-transform duration-300 transform">
    <!-- Sidebar Content -->
    <div class="p-4 ">
        <h2 class="text-lg mb-4 border-b pb-2 font-semibold">Sidebar Title</h2>

        <!-- Navigation Links -->
        <ul class="space-y-2">
          <li>
            <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                Link 1
            </a>
          </li>
          <li>
              <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                  Link 2
              </a>
          </li>
          <li>
              <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-white hover:border-b hover:border-black hover:text-black">
                  Link 3
              </a>
          </li>
        </ul>
    </div>
    <!-- End Sidebar Content -->

  </div>
  <!-- End Sidebar -->

  <!-- Kontainer Tombol Sembunyikan Sidebar -->
  <div id="toggleContainer" class="fixed top-0 left-0 mt-0 ml-14 z-50 transition duration-300 ease-in-out">
    <button id="toggleSidebar" class="block py-2 px-4 rounded bg-gray-700 text-white transition duration-200 hover:bg-gray-600 transform -translate-x-full">
      <!-- Gunakan karakter Unicode X dan burger -->
      <span id="toggleIcon">&#9776;</span>
    </button>
  </div>
  <!-- End Kontainer Tombol Sembunyikan Sidebar -->

  <!-- Konten utama -->
  <div id="mainContent" class="ml-12 transition duration-300 ease-in-out"> <!-- Menggeser konten utama ketika sidebar muncul -->
    <!-- Konten utama di sini -->
    <h1>Ini Konten Utama</h1>
  </div>

  
