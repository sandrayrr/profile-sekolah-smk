import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link, useForm } from '@inertiajs/react';

export default function Edit({ item }) {
    const { data, setData, put, errors } = useForm({
        judul: item.judul || '',
        sambutan: item.sambutan || '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        put(`/beranda/${item.id}`);
    };

    return (
        <AuthenticatedLayout>
            <div className="p-6">
                <h1 className="text-2xl mb-4">Edit Sambutan Kepala Sekolah</h1>

                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label className="block text-sm font-medium text-gray-700">Judul</label>
                        <input
                            type="text"
                            value={data.judul}
                            onChange={(e) => setData('judul', e.target.value)}
                            className="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        {errors.judul && <div className="text-red-600">{errors.judul}</div>}
                    </div>

                    <div className="mb-4">
                        <label className="block text-sm font-medium text-gray-700">Sambutan</label>
                        <textarea
                            value={data.sambutan}
                            onChange={(e) => setData('sambutan', e.target.value)}
                            className="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            rows="5"
                        />
                        {errors.sambutan && <div className="text-red-600">{errors.sambutan}</div>}
                    </div>

                    <button
                        type="submit"
                        className="px-4 py-2 bg-blue-600 text-white rounded"
                    >
                        Update
                    </button>

                    <Link
                        href="/beranda"
                        className="ml-4 px-4 py-2 bg-gray-600 text-white rounded"
                    >
                        Batal
                    </Link>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}
