<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Tabel -->
                    <table class="w-full table-auto">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama Barang</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Harga</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items['data']['data'] as $item)
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-sm text-center text-gray-800">{{ $item['nama_barang'] }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-center text-gray-600">
                                        {{ 'Rp ' . number_format($item['harga'], 0, ',', '.') }}</td>
                                    <td class="px-4 py-2 text-sm text-center text-gray-600">{{ $item['qty'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
