import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useEffect, useState } from "react";
import { CalendarDays, Newspaper, Award, Images, ShoppingCart, Package, CreditCard } from "lucide-react";

// === CHART JS ===
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    BarElement,
    Title,
    Tooltip,
    Legend,
} from "chart.js";

import { Line, Bar } from "react-chartjs-2";

ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    BarElement,
    Title,
    Tooltip,
    Legend
);

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

    // =========================
    // DATA GRAFIK KUNJUNGAN
    // =========================
    const visitorData = {
        labels: ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"],
        datasets: [
            {
                label: "Pengunjung",
                data: [120, 190, 170, 220, 260, 300, 280],
                borderColor: "rgb(37, 99, 235)",
                backgroundColor: "rgba(37, 99, 235, 0.2)",
                tension: 0.4,
            },
        ],
    };

    // =========================
    // DATA GRAFIK PENJUALAN
    // =========================
    const salesData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
        datasets: [
            {
                label: "Penjualan",
                data: [12, 19, 15, 22, 28, 35],
                backgroundColor: "rgba(16, 185, 129, 0.7)",
            },
        ],
    };

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

            {/* ================= GRAFIK REAL ================= */}
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">

                {/* GRAFIK KUNJUNGAN */}
                <div className="bg-white rounded-3xl p-6 shadow-xl border border-indigo-100">
                    <h3 className="font-semibold text-gray-700 mb-4">
                        Grafik Kunjungan Harian
                    </h3>
                    <Line data={visitorData} />
                </div>

                {/* GRAFIK PENJUALAN */}
                <div className="bg-white rounded-3xl p-6 shadow-xl border border-indigo-100">
                    <h3 className="font-semibold text-gray-700 mb-4">
                        Grafik Penjualan Marketplace
                    </h3>
                    <Bar data={salesData} />
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
