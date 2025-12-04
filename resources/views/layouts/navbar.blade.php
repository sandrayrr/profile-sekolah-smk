<nav class="backdrop-blur bg-[#F0F6FF]/95 shadow-md border-b border-blue-100 sticky top-0 z-50">

    <!-- TOP BAR -->
    <div class="py-3">
        <div class="container mx-auto px-6 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="https://share.google/images/3lOcbqDj9dY3NVfgO"
                     class="w-12 h-12 rounded-lg shadow-sm" alt="Logo">
                <div>  
                    <h1 class="text-xl font-bold text-blue-700">SMK Negeri 1</h1>
                    <p class="text-sm text-blue-500">Kawali</p>
                </div>
            </div>

            <!-- Desktop Tools -->
            <div class="hidden md:flex items-center space-x-10 text-blue-800">

                <!-- Telepon -->
                <div class="flex items-center space-x-2">
                    <span class="text-2xl text-blue-600">📞</span>
                    <div>
                        <p class="text-xs text-blue-500">Telepon</p>
                        <p class="font-semibold">02112345678</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-center space-x-2">
                    <span class="text-2xl text-blue-600">📧</span>
                    <div>
                        <p class="text-xs text-blue-500">Email</p>
                        <p class="font-semibold">adminnail@nsm.sch.id</p>
                    </div>
                </div>

                <!-- Login -->
                <a href="/login"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow transition">
                    Login
                </a>
            </div>

            <!-- Mobile Button -->
            <button id="menuToggle"
                class="md:hidden text-4xl text-blue-800">
                ☰
            </button>
        </div>
    </div>

    <!-- NAV MENU -->
    <div class="border-t border-blue-100">
        <div class="container mx-auto px-6 py-3">
            <ul class="hidden md:flex justify-center space-x-10 text-blue-800 font-medium">

                <li><a href="/" class="hover:text-blue-600 transition">Beranda</a></li>
                <li><a href="/profil" class="hover:text-blue-600 transition">Profil</a></li>
                <li><a href="/jurusan" class="hover:text-blue-600 transition">Jurusan</a></li>
                <li><a href="/artikel" class="hover:text-blue-600 transition">Artikel</a></li>
                <li><a href="/galeri" class="hover:text-blue-600 transition">Galeri</a></li>
                <li><a href="/prestasi" class="hover:text-blue-600 transition">Prestasi</a></li>

                <!-- Dropdown -->
                <li class="relative group">
                    <button class="hover:text-blue-600 transition">Lainnya ▾</button>

                    <div class="absolute left-0 mt-3 
                                bg-white/90 backdrop-blur-xl
                                shadow-xl rounded-xl py-3 w-56 
                                hidden group-hover:block z-[9999] border border-blue-100">

                        <a href="/link" class="block px-4 py-2 hover:bg-blue-50 rounded-lg">Link</a>
                        <a href="/akreditasi" class="block px-4 py-2 hover:bg-blue-50 rounded-lg">Akreditasi</a>
                        <a href="/ekstrakurikuler" class="block px-4 py-2 hover:bg-blue-50 rounded-lg">Ekstrakurikuler</a>
                        <a href="/fasilitas" class="block px-4 py-2 hover:bg-blue-50 rounded-lg">Fasilitas</a>

                    </div>
                </li>
            </ul>

            <!-- MOBILE MENU -->
            <ul id="mobileMenu"
                class="hidden md:hidden bg-[#F0F6FF] border border-blue-200 rounded-lg p-4 shadow-lg space-y-3 mt-2 text-blue-900">

                <li><a href="/">Beranda</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/jurusan">Jurusan</a></li>
                <li><a href="/artikel">Artikel</a></li>
                <li><a href="/galeri">Galeri</a></li>
                <li><a href="/prestasi">Prestasi</a></li>

                <li class="font-semibold mt-2 text-blue-600">Lainnya</li>
                <li><a href="/link">Link</a></li>
                <li><a href="/akreditasi">Akreditasi</a></li>
                <li><a href="/ekstrakurikuler">Ekstrakurikuler</a></li>
                <li><a href="/fasilitas">Fasilitas</a></li>

                <a href="/login"
                    class="block text-center px-4 py-2 bg-blue-600 text-white rounded-lg">
                    Login
                </a>
            </ul>

        </div>
    </div>
</nav>

<script>
    // Mobile Menu
    document.getElementById('menuToggle').onclick = () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    };
</script>
