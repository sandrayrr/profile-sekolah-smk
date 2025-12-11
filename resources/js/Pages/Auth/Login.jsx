import { useEffect, useState } from 'react';
import { Head, Link, useForm } from '@inertiajs/react';
import { Eye, EyeOff } from 'lucide-react';

export default function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const [showPassword, setShowPassword] = useState(false);

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
        post(route('login'));
    };

    return (
        <>
            <Head title="Login" />

            {/* POPUP OVERLAY */}
            <div className="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50 px-4">

                {/* CARD LOGIN — FOTO + FORM */}
                <div className="
                    bg-white w-full max-w-3xl 
                    shadow-2xl rounded-xl overflow-hidden 
                    flex border border-gray-200 animate-fadeIn
                ">

                    {/* LEFT IMAGE (TIDAK DIHAPUS) */}
                    <div className="hidden md:block w-1/2">
                        <img
                            src="/images/WhatsApp Image 2025-12-04 at 10.45.35.jpeg"
                            className="w-full h-full object-cover"
                            alt="School"
                        />
                    </div>

                    {/* RIGHT FORM */}
                    <div className="w-full md:w-1/2 p-8 flex flex-col justify-center">

                        <h2 className="text-center mb-6 text-2xl font-bold text-blue-700 tracking-wide">
                            SELAMAT DATANG!
                        </h2>

                        <form onSubmit={submit} className="space-y-5">

                            {/* EMAIL */}
                            <div>
                                <input
                                    type="email"
                                    placeholder="Email"
                                    value={data.email}
                                    onChange={(e) => setData('email', e.target.value)}
                                    className="
                                        w-full p-3 border border-gray-300 rounded-lg 
                                        focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                                        outline-none
                                    "
                                />
                                {errors.email && (
                                    <p className="text-sm text-red-500 mt-1">{errors.email}</p>
                                )}
                            </div>

                            {/* PASSWORD */}
                            <div className="relative">
                                <input
                                    type={showPassword ? 'text' : 'password'}
                                    placeholder="Password"
                                    value={data.password}
                                    onChange={(e) => setData('password', e.target.value)}
                                    className="
                                        w-full p-3 border border-gray-300 rounded-lg 
                                        focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                                        outline-none
                                    "
                                />

                                {/* Show/Hide Password */}
                                <button
                                    type="button"
                                    onClick={() => setShowPassword(!showPassword)}
                                    className="absolute right-3 top-3 text-gray-600"
                                >
                                    {showPassword ? <EyeOff size={22} /> : <Eye size={22} />}
                                </button>

                                {errors.password && (
                                    <p className="text-sm text-red-500 mt-1">{errors.password}</p>
                                )}
                            </div>

                            {/* LOGIN BUTTON */}
                            <button
                                type="submit"
                                disabled={processing}
                                className="
                                    w-full p-3 rounded-lg font-semibold 
                                    bg-blue-600 hover:bg-blue-700 text-white 
                                    transition-all shadow-sm
                                "
                            >
                                {processing ? 'antosan sakedap kok...' : 'Login'}
                            </button>
                        </form>

                        {/* LINKS */}
                        <div className="mt-6 text-center space-y-2 text-gray-700">
                            <Link
                                href={route('password.request')}
                                className="text-sm text-blue-600 underline hover:text-blue-800"
                            >
                                Lupa Password?
                            </Link>

                            <div className="text-sm">
                                Belum punya akun?{' '}
                                <Link
                                    href={route('register')}
                                    className="text-blue-600 underline hover:text-blue-800"
                                >
                                    Registrasi
                                </Link>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {/* ANIMASI */}
            <style>{`
                @keyframes fadeIn {
                    from { opacity: 0; transform: scale(0.97); }
                    to { opacity: 1; transform: scale(1); }
                }
                .animate-fadeIn {
                    animation: fadeIn .25s ease-out;
                }
            `}</style>
        </>
    );
}
