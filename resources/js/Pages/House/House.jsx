import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

export default function House({ houses }) {
    return (
        <AuthenticatedLayout>
            <Head title="Houses" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            <h1>Houses</h1>
                            <ul>
                                {houses.map((house) => (
                                    <li key={house.id}>
                                        <Link
                                            href={route(
                                                'houses.show',
                                                house.id,
                                            )}
                                            className="text-blue-600 hover:text-blue-800"
                                        >
                                            {house.name}
                                        </Link>
                                    </li>
                                ))}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
