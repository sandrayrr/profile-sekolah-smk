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

            <div className="min-h-screen flex items-center justify-center bg-white p-6">

                {/* CARD */}
                <div className="
                    w-full max-w-4xl bg-white 
                    shadow-2xl rounded-3xl overflow-hidden 
                    flex border border-gray-200
                ">

                    {/* LEFT IMAGE */}
                    <div className="hidden md:block w-1/2 p-4">
                        <img
                            src="/images/WhatsApp Image 2025-12-04 at 10.45.35.jpeg"
                            className="w-full h-full object-cover rounded-3xl"
                            alt="School"
                        />
                    </div>

                    {/* RIGHT FORM */}
                    <div className="w-full md:w-1/2 p-10 flex flex-col justify-center">

                        <h2 className="text-center mb-6 text-2xl font-bold text-blue-700">
                            HELLO, K-ONE!
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
                                        w-full p-3 rounded-xl bg-gray-100 
                                        focus:ring-2 focus:ring-blue-400 outline-none
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
                                        w-full p-3 rounded-xl bg-gray-100 
                                        focus:ring-2 focus:ring-blue-400 outline-none
                                    "
                                />

                                {/* Show/Hide */}
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
                                    w-full p-3 rounded-xl font-semibold 
                                    bg-blue-600 hover:bg-blue-700 text-white 
                                    transition-all shadow-md
                                "
                            >
                                {processing ? 'antosan sakedap...' : 'Login'}
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
        </>
    );
}
