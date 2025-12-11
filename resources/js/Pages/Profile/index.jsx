import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link } from '@inertiajs/react';
import { Pencil, Trash2, Plus, FileText } from 'lucide-react';

export default function Index({ data }) {
    return (
        <AuthenticatedLayout>
            <div className="px-4 py-6 sm:px-6 lg:px-8">

                {/* HEADER */}
                <div className="mb-8">
                    <div className="flex items-center gap-3 mb-2">
                        <div className="p-2 bg-blue-100 rounded-lg">
                            <FileText className="h-6 w-6 text-blue-600" />
                        </div>
                        <h1 className="text-3xl font-bold text-gray-900">
                            Kelola Sambutan Kepala Sekolah
                        </h1>
                    </div>
                    <p className="text-gray-600 ml-11">
                        Kelola konten sambutan yang akan ditampilkan di halaman beranda
                    </p>
                </div>

                {/* CARD TABLE */}
                <div className="bg-white shadow-md rounded-lg overflow-hidden">

                    {/* TITLE ROW DESIGNED */}
                    <div className="
                        px-6 py-4 border-b border-gray-200 
                        flex justify-center items-center relative
                    ">
                        <h2 className="text-lg font-semibold text-gray-800 text-center">
                            Daftar Sambutan
                        </h2>

                        {/* BUTTON – ACTUALLY FLOAT RIGHT */}
                        <Link
                            href="/beranda/create"
                            className="
                                absolute right-6 
                                inline-flex items-center gap-2 px-4 py-2 
                                bg-blue-600 text-white rounded-lg shadow 
                                hover:bg-blue-700 transition-all duration-200 hover:shadow-md
                            "
                        >
                            <Plus size={18} />
                            <span>Tambah Sambutan</span>
                        </Link>
                    </div>

                    {/* TABLE */}
                    <div className="overflow-x-auto">
                        <table className="w-full">
                            <thead className="bg-gray-50 border-b border-gray-200">
                                <tr>
                                    <th className="px-6 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-16">
                                        No
                                    </th>
                                    <th className="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Judul
                                    </th>
                                    <th className="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Sambutan
                                    </th>
                                    <th className="px-6 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-32">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody className="bg-white divide-y divide-gray-200">
                                {data.length > 0 ? (
                                    data.map((item, index) => (
                                        <tr
                                            key={item.id}
                                            className={`${
                                                index % 2 === 0 ? 'bg-white' : 'bg-gray-50'
                                            } hover:bg-blue-50 transition-colors duration-150`}
                                        >
                                            {/* NOMOR */}
                                            <td className="px-6 py-4 text-center text-gray-700 font-medium">
                                                {index + 1}
                                            </td>

                                            {/* JUDUL */}
                                            <td className="px-6 py-4 whitespace-nowrap">
                                                <div className="text-sm font-medium text-gray-900">
                                                    {item.judul}
                                                </div>
                                            </td>

                                            {/* SAMBUTAN */}
                                            <td className="px-6 py-4">
                                                <div className="text-sm text-gray-600 line-clamp-2">
                                                    {item.sambutan}
                                                </div>
                                            </td>

                                            {/* AKSI */}
                                            <td className="px-6 py-4 whitespace-nowrap text-center">
                                                <div className="flex items-center justify-center gap-3">

                                                    {/* EDIT */}
                                                    <Link
                                                        href={`/beranda/${item.id}/edit`}
                                                        className="p-2 bg-yellow-100 text-yellow-600 rounded-full hover:bg-yellow-200 transition-colors duration-150"
                                                        title="Edit"
                                                    >
                                                        <Pencil size={16} />
                                                    </Link>

                                                    {/* DELETE */}
                                                    <Link
                                                        href={`/beranda/${item.id}`}
                                                        method="delete"
                                                        as="button"
                                                        className="p-2 bg-red-100 text-red-600 rounded-full hover:bg-red-200 transition-colors duration-150"
                                                        title="Hapus"
                                                    >
                                                        <Trash2 size={16} />
                                                    </Link>
                                                </div>
                                            </td>
                                        </tr>
                                    ))
                                ) : (
                                    <tr>
                                        <td colSpan="4" className="px-6 py-10 text-center text-gray-500">
                                            <div className="flex flex-col items-center">
                                                <FileText className="h-12 w-12 text-gray-300 mb-3" />
                                                <p>Belum ada data sambutan</p>
                                                <Link
                                                    href="/beranda/create"
                                                    className="mt-3 text-blue-600 hover:text-blue-800 font-medium"
                                                >
                                                    Tambah sambutan pertama
                                                </Link>
                                            </div>
                                        </td>
                                    </tr>
                                )}
                            </tbody>
                        </table>
                    </div>

                    {/* EXTRA SPACE BAWAH */}
                    <div className="py-4"></div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
