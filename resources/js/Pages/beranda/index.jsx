import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link } from '@inertiajs/react';
import { Pencil, Trash2 } from 'lucide-react';

export default function Index({ data }) {
    return (
        <AuthenticatedLayout>
            <div className="p-6">
                <h1 className="text-2xl font-semibold mb-6">Kelola Sambutan Kepala Sekolah</h1>

                <Link
                    href="/beranda/create"
                    className="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700 transition"
                >
                    Tambah Sambutan
                </Link>

                <table className="w-full mt-4 border border-gray-300 rounded overflow-hidden">
                    <thead className="bg-gray-100">
                        <tr>
                            <th className="border px-4 py-2 text-left">Judul</th>
                            <th className="border px-4 py-2 text-left">Sambutan</th>
                            <th className="border px-4 py-2 text-center w-24">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        {data.map((item) => (
                            <tr key={item.id} className="hover:bg-gray-50">
                                <td className="border px-4 py-2">{item.judul}</td>
                                <td className="border px-4 py-2">{item.sambutan}</td>
                                <td className="border px-4 py-2 text-center flex items-center justify-center gap-4">

                                    {/* ICON EDIT */}
                                    <Link
                                        href={`/beranda/${item.id}/edit`}
                                        className="text-yellow-600 hover:text-yellow-700"
                                    >
                                        <Pencil size={18} />
                                    </Link>

                                    {/* ICON HAPUS */}
                                    <Link
                                        href={`/beranda/${item.id}`}
                                        method="delete"
                                        as="button"
                                        className="text-red-600 hover:text-red-700"
                                    >
                                        <Trash2 size={18} />
                                    </Link>

                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </AuthenticatedLayout>
    );
}
