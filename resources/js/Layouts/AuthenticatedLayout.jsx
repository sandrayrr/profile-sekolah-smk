import { Link, usePage } from "@inertiajs/react";
import {
    HomeIcon,
    UserIcon,
    BuildingOfficeIcon,
    AcademicCapIcon,
    PhotoIcon,
    ShoppingCartIcon,
    UsersIcon,
    Cog6ToothIcon,
    ArrowRightOnRectangleIcon,
} from "@heroicons/react/24/outline";

export default function AuthenticatedLayout({ children }) {
    const { auth } = usePage().props;

    const itemClass =
        "flex items-center gap-3 px-3 py-2 rounded-md hover:bg-blue-100 hover:text-blue-700 transition cursor-pointer text-[15px]";

    return (
        <div className="min-h-screen flex bg-gray-100">

            {/* ================= SIDEBAR ================= */}
            <aside className="w-64 bg-white shadow-xl border-r border-gray-200 fixed h-full flex flex-col">

                {/* ===== LOGO + PROFILE ===== */}
                <div className="px-5 py-6 border-b bg-gradient-to-r from-blue-50 to-blue-100">
                    <div className="flex items-center gap-3">

                        {/* LOGO ICON */}
                        <div className="w-12 h-12 bg-blue-600 flex items-center justify-center rounded-full">
                            <HomeIcon className="w-7 h-7 text-white" />
                        </div>

                        <div>
                            <p className="text-sm font-semibold text-gray-800">
                                {auth.user.name}
                            </p>
                            <p className="text-xs text-green-600 font-medium">
                                ● Online
                            </p>
                        </div>
                    </div>
                </div>

                {/* ===== MENU ===== */}
                <nav className="mt-4 text-gray-700 overflow-y-auto pb-10">

                    {/* Dashboard */}
                    <div className="px-4 py-2 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                        Dashboard Utama
                    </div>

                    <Link href={route("dashboard")} className={itemClass}>
                        <HomeIcon className="w-5 h-5" />
                        Dashboard Utama
                    </Link>

                    {/* Manajemen Konten */}
                    <div className="mt-5">
                        <p className="px-4 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                            Manajemen Konten
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                                <Link href={route('beranda.index')} className={itemClass}>
                                <HomeIcon className="w-5 h-5" />
                                Beranda
                            </Link>
                             <div className={itemClass}>
                                <UsersIcon className="w-5 h-5" />
                                Profil
                            </div>
                            <div className={itemClass}>
                                <UsersIcon className="w-5 h-5" />
                                Profil
                            </div>
                            <div className={itemClass}>
                                <BuildingOfficeIcon className="w-5 h-5" />
                                Fasilitas
                            </div>
                            <div className={itemClass}>
                                <AcademicCapIcon className="w-5 h-5" />
                                Link Penting
                            </div>
                        </div>
                    </div>

                    {/* Akademik */}
                    <div className="mt-5">
                        <p className="px-4 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                            Akademik & Prestasi
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <div className={itemClass}>
                                <AcademicCapIcon className="w-5 h-5" />
                                Jurusan
                            </div>
                            <div className={itemClass}>
                                <AcademicCapIcon className="w-5 h-5" />
                                Akreditasi
                            </div>
                            <div className={itemClass}>
                                <AcademicCapIcon className="w-5 h-5" />
                                Prestasi
                            </div>
                        </div>
                    </div>

                    {/* Artikel & Galeri */}
                    <div className="mt-5">
                        <p className="px-4 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                            Artikel & Galeri
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <div className={itemClass}>
                                <UsersIcon className="w-5 h-5" />
                                Artikel
                            </div>
                            <div className={itemClass}>
                                <UsersIcon className="w-5 h-5" />
                                Kategori Artikel
                            </div>
                            <div className={itemClass}>
                                <PhotoIcon className="w-5 h-5" />
                                Galeri
                            </div>
                        </div>
                    </div>

                    {/* Marketplace */}
                    <div className="mt-5">
                        <p className="px-4 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                            Marketplace
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <div className={itemClass}>
                                <ShoppingCartIcon className="w-5 h-5" />
                                Produk
                            </div>
                            <div className={itemClass}>
                                <ShoppingCartIcon className="w-5 h-5" />
                                Kategori Produk
                            </div>
                            <div className={itemClass}>
                                <ShoppingCartIcon className="w-5 h-5" />
                                Pemesanan
                            </div>
                        </div>
                    </div>

                    {/* Pengguna */}
                    <div className="mt-5">
                        <p className="px-4 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                            Manajemen Pengguna
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <div className={itemClass}>
                                <UsersIcon className="w-5 h-5" />
                                Akun Admin
                            </div>
                            <div className={itemClass}>
                                <UsersIcon className="w-5 h-5" />
                                Akun Siswa & Guru
                            </div>
                        </div>
                    </div>

                    {/* Sistem */}
                    <div className="mt-5">
                        <p className="px-4 text-[13px] font-semibold text-gray-500 uppercase tracking-wide">
                            Pengaturan Sistem
                        </p>
                        <div className="mt-2 ml-4 space-y-1">
                            <div className={itemClass}>
                                <Cog6ToothIcon className="w-5 h-5" />
                                Pengaturan Umum
                            </div>
                        </div>
                    </div>

                    {/* Logout */}
                    <div className="mt-8 px-4">
                        <form method="POST" action={route("logout")}>
                            <input type="hidden" name="_token" value={document.querySelector('meta[name="csrf-token"]').getAttribute('content')} />
                            <button
                                type="submit"
                                className="w-full py-3 text-left text-red-600 font-semibold
                                hover:bg-red-100 rounded-lg transition flex items-center gap-3"
                            >
                                <ArrowRightOnRectangleIcon className="w-6 h-6" />
                                Logout
                            </button>
                        </form>
                    </div>
                </nav>
            </aside>

            {/* ================= MAIN CONTENT ================= */}
            <main className="flex-1 ml-64 p-10 bg-gray-50 min-h-screen">
                {children}
            </main>

        </div>
    );
}