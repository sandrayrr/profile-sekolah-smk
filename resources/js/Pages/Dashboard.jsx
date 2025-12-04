import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useEffect, useState } from "react";
import { CalendarDays, Newspaper, Award, Images, ShoppingCart, Package, CreditCard } from "lucide-react";

export default function Dashboard() {

    // === JAM REALTIME ===
    const [time, setTime] = useState("");

    useEffect(() => {
        const interval = setInterval(() => {
            const date = new Date();
            const jam = String(date.getHours()).padStart(2, "0");
            const menit = String(date.getMinutes()).padStart(2, "0");
            const detik = String(date.getSeconds()).padStart(2, "0");
            setTime(`${jam}:${menit}:${detik}`);
        }, 1000);

        return () => clearInterval(interval);
    }, []);

    // === KALENDER MINI ===
    const today = new Date().toLocaleDateString("id-ID", {
        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric",
    });

    return (
        <AuthenticatedLayout>
            <Head title="Dashboard" />

            <h2 className="text-xl font-bold mb-6 text-blue-700 drop-shadow-sm">
                Selamat Datang, Super Admin!
            </h2>

            {/* ROW 1 */}
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                {/* JAM */}
                <div className="bg-white rounded-3xl h-40 flex flex-col items-center justify-center 
                    shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100">
                    <p className="text-4xl font-bold text-blue-700">{time}</p>
                    <p className="text-sm text-gray-500 mt-2">Jam Saat Ini</p>
                </div>

                {/* KALENDER */}
                <div className="bg-white rounded-3xl h-40 flex flex-col items-center justify-center 
                    shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100">
                    <CalendarDays size={42} className="text-blue-600 mb-2" />
                    <p className="text-lg font-semibold text-gray-700">{today}</p>
                </div>
            </div>

            {/* ROW 2 */}
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <StatCard icon={<Newspaper size={32} />} label="Artikel Aktif" value="128" />
                <StatCard icon={<Award size={32} />} label="Prestasi" value="52" />
                <StatCard icon={<Images size={32} />} label="Galeri Foto" value="340" />
            </div>

            {/* ROW 3 */}
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <StatCard icon={<ShoppingCart size={32} />} label="Pesanan Baru" value="14" />
                <StatCard icon={<Package size={32} />} label="Produk Aktif" value="87" />
                <StatCard icon={<CreditCard size={32} />} label="Transaksi Bulan Ini" value="Rp 12.4 Jt" />
            </div>

            {/* GRAFIK */}
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div className="bg-white rounded-3xl h-64 flex items-center justify-center 
                    shadow-xl border border-indigo-100">
                    Grafik Kunjungan Harian
                </div>

                <div className="bg-white rounded-3xl h-64 flex items-center justify-center 
                    shadow-xl border border-indigo-100">
                    Grafik Penjualan Marketplace
                </div>
            </div>

        </AuthenticatedLayout>
    );
}


// ==========================
//      KOMPONEN STAT CARD
// ==========================
function StatCard({ icon, label, value }) {
    return (
        <div className="bg-white rounded-3xl h-32 p-5 flex items-center gap-4 shadow-md 
            hover:shadow-xl transition-all duration-300 hover:-translate-y-1 
            border border-gray-100">

            <div className="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-700">
                {icon}
            </div>

            <div>
                <p className="text-gray-500 text-sm">{label}</p>
                <p className="text-2xl font-bold text-gray-800">{value}</p>
            </div>
        </div>
    );
}
