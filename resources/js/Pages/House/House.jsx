import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

export default function House({ houses }) {
    return (
        <AuthenticatedLayout>
            <Head title="Houses" />

            <div>
                <h1>Houses</h1>
                <ul>
                    {houses.map((house) => (
                        <li key={house.id}>
                            <Link
                                href={route('houses.show', house.id)}
                                className="text-blue-600 hover:text-blue-800"
                            >
                                {house.name}
                            </Link>
                        </li>
                    ))}
                </ul>
            </div>
        </AuthenticatedLayout>
    );
}
