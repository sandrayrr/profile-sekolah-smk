import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link } from '@inertiajs/react';

export default function Index({ data }) {
    return (
        <AuthenticatedLayout>
            <div className="p-6">
                <h1 className="text-2xl mb-4">Data Beranda</h1>

                <Link
                    href="/beranda/create"
                    className="px-3 py-2 bg-blue-600 text-white rounded"
                >
                    Tambah Data
                </Link>

                <table className="w-full mt-4">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {data.map((item) => (
                            <tr key={item.id}>
                                <td>{item.judul}</td>
                                <td>
                                    {/* ✅ LINK EDIT */}
                                    <Link
                                        href={`/beranda/${item.id}/edit`}
                                        className="text-yellow-600"
                                    >
                                        Edit
                                    </Link>

                                    {/* ✅ LINK HAPUS */}
                                    <Link
                                        href={`/beranda/${item.id}`}
                                        method="delete"
                                        as="button"
                                        className="text-red-600 ml-2"
                                    >
                                        Hapus
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
