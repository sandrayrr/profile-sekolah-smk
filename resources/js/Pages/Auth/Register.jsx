import { useForm, Link } from '@inertiajs/react';
import { useEffect } from 'react';

export default function Register() {
    const { data, setData, post, processing, errors } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post('/register');
    };

    // Kunci scroll saat modal muncul
    useEffect(() => {
        document.body.style.overflow = "hidden";
        return () => (document.body.style.overflow = "unset");
    }, []);

    return (
        <div className="fixed inset-0 bg-black/30 backdrop-blur-sm flex items-center justify-center px-4 z-50">

            {/* Card Register */}
            <div className="bg-white w-full max-w-md rounded-2xl shadow-xl p-8 animate-fadeIn">
                <h2 className="text-2xl font-semibold text-gray-800 text-center mb-6">
                    Buat Akun Baru
                </h2>

                <form onSubmit={handleSubmit} className="space-y-4">

                    {/* NAME */}
                    <div>
                        <label className="text-sm text-gray-700">Nama Lengkap</label>
                        <input
                            type="text"
                            value={data.name}
                            onChange={(e) => setData('name', e.target.value)}
                            className="mt-1 w-full border border-gray-300 rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        {errors.name && (
                            <p className="text-red-600 text-sm mt-1">{errors.name}</p>
                        )}
                    </div>

                    {/* EMAIL */}
                    <div>
                        <label className="text-sm text-gray-700">Email</label>
                        <input
                            type="email"
                            value={data.email}
                            onChange={(e) => setData('email', e.target.value)}
                            className="mt-1 w-full border border-gray-300 rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        {errors.email && (
                            <p className="text-red-600 text-sm mt-1">{errors.email}</p>
                        )}
                    </div>

                    {/* PASSWORD */}
                    <div>
                        <label className="text-sm text-gray-700">Password</label>
                        <input
                            type="password"
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                            className="mt-1 w-full border border-gray-300 rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        {errors.password && (
                            <p className="text-red-600 text-sm mt-1">{errors.password}</p>
                        )}
                    </div>

                    {/* CONFIRM PASSWORD */}
                    <div>
                        <label className="text-sm text-gray-700">Konfirmasi Password</label>
                        <input
                            type="password"
                            value={data.password_confirmation}
                            onChange={(e) => setData('password_confirmation', e.target.value)}
                            className="mt-1 w-full border border-gray-300 rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    {/* BUTTON */}
                    <button
                        type="submit"
                        disabled={processing}
                        className="w-full py-2 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition"
                    >
                        Daftar
                    </button>

                    {/* LINK TO LOGIN */}
                    <p className="text-center text-sm text-gray-600 mt-2">
                        Sudah punya akun?{" "}
                        <Link href="/login" className="text-blue-600 font-medium">
                            Masuk
                        </Link>
                    </p>
                </form>
            </div>

            {/* ANIMATION */}
            <style>{`
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(10px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                .animate-fadeIn {
                    animation: fadeIn .25s ease-out;
                }
            `}</style>
        </div>
    );
}
