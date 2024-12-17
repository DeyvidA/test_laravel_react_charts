import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { Bar, BarChart, CartesianGrid, Tooltip, XAxis, YAxis } from 'recharts';

export default function Details({ house }) {
    console.log(house);
    house = house.house_pricings.map((item) => {
        return {
            name: item.month,
            uv: item.price,
        };
    });

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <BarChart
                    width={1200}
                    height={300}
                    data={house}
                    margin={{ top: 5, right: 30, left: 20, bottom: 5 }}
                >
                    <XAxis dataKey="name" />
                    <YAxis />
                    <Tooltip />
                    <CartesianGrid stroke="#f5f5f5" />
                    <Bar
                        type="monotone"
                        dataKey="uv"
                        fill="#8884d8"
                        barSize={30}
                    />
                </BarChart>
            </div>
        </AuthenticatedLayout>
    );
}
