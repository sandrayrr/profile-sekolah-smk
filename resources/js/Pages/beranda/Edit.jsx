import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link, useForm, router } from '@inertiajs/react';
import { useState } from 'react';

export default function Edit({ item }) {
    const { data, setData, put, processing, errors } = useForm({
        judul: item.judul || '',
        sambutan: item.sambutan || '',
    });

    const [open, setOpen] = useState(true);

    const handleSubmit = (e) => {
        e.preventDefault();

        // FIX : tambahkan slash /
        put(`/beranda/${item.id}`, {
            onSuccess: () => {
                router.visit('/beranda');
            }
        });
    };

    const handleCancel = () => {
        router.visit('/beranda');
    };

    return (
        <AuthenticatedLayout>
            {open && (
                <div className="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">
                    <div className="bg-white w-full max-w-xl rounded-lg shadow-xl p-6 animate-[fadeIn_.3s]">

                        <div className="flex justify-between items-center border-b pb-3">
                            <h1 className="text-lg font-semibold">
                                Edit Sambutan Kepala Sekolah
                            </h1>

                            <button
                                onClick={handleCancel}
                                className="text-gray-600 hover:text-red-500 text-xl"
                            >
                                ×
                            </button>
                        </div>

                        <form onSubmit={handleSubmit} className="mt-4">
                            <div className="mb-4">
                                <label className="block text-sm font-medium text-gray-700">
                                    Judul
                                </label>
                                <input
                                    type="text"
                                    value={data.judul}
                                    onChange={(e) => setData("judul", e.target.value)}
                                    className="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                />
                                {errors.judul && (
                                    <div className="text-red-600 text-sm">
                                        {errors.judul}
                                    </div>
                                )}
                            </div>

                            <div className="mb-4">
                                <label className="block text-sm font-medium text-gray-700">
                                    Sambutan
                                </label>
                                <textarea
                                    value={data.sambutan}
                                    onChange={(e) =>
                                        setData("sambutan", e.target.value)
                                    }
                                    className="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                    rows="5"
                                />
                                {errors.sambutan && (
                                    <div className="text-red-600 text-sm">
                                        {errors.sambutan}
                                    </div>
                                )}
                            </div>

                            <div className="flex justify-end gap-3 mt-6">
                                <button
                                    type="button"
                                    onClick={handleCancel}
                                    className="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600"
                                >
                                    Batal
                                </button>

                                <button
                                    type="submit"
                                    className="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                                >
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            )}
        </AuthenticatedLayout>
    );
}
