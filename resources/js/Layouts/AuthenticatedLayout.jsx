import { Link, usePage } from "@inertiajs/react";

export default function AuthenticatedLayout({ children }) {
    const { auth } = usePage().props;
const itemClass =
    "cursor-pointer px-2 py-1 rounded-md hover:bg-blue-100 hover:text-blue-700 transition";

    return (
        <div className="min-h-screen flex bg-gray-100">

            {/* SIDEBAR */}
            <aside className="w-64 bg-white shadow-xl border-r border-gray-200 
                              fixed h-full flex flex-col">

                {/* Profile */}
                <div className="px-5 py-6 border-b bg-gradient-to-r from-blue-50 to-blue-100">
                    <div className="flex items-center gap-3">
                        <div className="w-12 h-12 bg-gray-200 rounded-full border"></div>

                        <div>
                            <p className="text-sm font-semibold text-gray-800">{auth.user.name}</p>
                            <p className="text-xs text-green-600 font-medium">● Online</p>
                        </div>
                    </div>
                </div>

                {/* MENU */}
                <nav className="mt-4 text-sm text-gray-700 overflow-y-auto">

                    {/* Section Title */}
                    <div className="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        Dashboard Utama
                    </div>

                    <div className="px-4 py-2 hover:bg-blue-50 cursor-pointer rounded-md transition">
                        <p className="font-medium text-gray-800 flex items-center gap-2">
                            📊 Dashboard Utama
                        </p>
                    </div>

                    {/* Manajemen Konten */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Manajemen Konten
                        </p>

                        <div className="mt-2 ml-4 space-y-1">
                            <p className="sidebar-item">&gt; Beranda</p>
                            <p className="sidebar-item">&gt; Profil</p>
                            <p className="sidebar-item">&gt; Fasilitas</p>
                            <p className="sidebar-item">&gt; Link Penting</p>
                        </div>
                    </div>

                    {/* Akademik */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Akademik & Prestasi
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <p className="sidebar-item">&gt; Jurusan</p>
                            <p className="sidebar-item">&gt; Akreditasi</p>
                            <p className="sidebar-item">&gt; Prestasi</p>
                        </div>
                    </div>

                    {/* Artikel */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Artikel & Galeri
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <p className="sidebar-item">&gt; Artikel</p>
                            <p className="sidebar-item">&gt; Kategori Artikel</p>
                            <p className="sidebar-item">&gt; Galeri</p>
                        </div>
                    </div>

                    {/* Ekstrakulikuler */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Ekstrakurikuler
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <p className="sidebar-item">&gt; Daftar Ekstrakulikuler</p>
                            <p className="sidebar-item">&gt; Profil Ekstrakulikuler</p>
                        </div>
                    </div>

                    {/* Marketplace */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Marketplace
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <p className="sidebar-item">&gt; Produk</p>
                            <p className="sidebar-item">&gt; Kategori Produk</p>
                            <p className="sidebar-item">&gt; Pemesanan</p>
                        </div>
                    </div>

                    {/* Pengguna */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Manajemen Pengguna
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <p className="sidebar-item">&gt; Akun Admin</p>
                            <p className="sidebar-item">&gt; Akun Siswa dan Guru</p>
                        </div>
                    </div>

                    {/* Sistem */}
                    <div className="mt-4">
                        <p className="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                            Pengaturan Sistem
                        </p>
                        <div className="mt-2 ml-4">
                            <p className="sidebar-item">&gt; Pengaturan umum</p>
                        </div>
                    </div>

                    {/* Logout */}
                    <div className="mt-6 px-4">
                        <Link
                            href={route("logout")}
                            method="post"
                            as="button"
                            className="w-full py-3 text-left text-red-600 font-semibold 
                                       hover:bg-red-100 rounded-lg transition flex items-center gap-2"
                        >
                            🚪 Logout
                        </Link>
                    </div>
                </nav>
            </aside>

            {/* MAIN CONTENT */}
            <main className="flex-1 ml-64 p-10 bg-gray-50 min-h-screen">
                {children}
            </main>

        </div>
    );
}
