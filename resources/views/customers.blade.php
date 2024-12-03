<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <!-- Tabel Customers --> --}}
                    <table class="w-full table-auto">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama Pelanggan</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">WhatsApp</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers['data']['data'] as $customer)
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-sm text-center text-gray-800">
                                        {{ $customer['nama_pelanggan'] }}</td>
                                    <td class="px-4 py-2 text-sm text-center text-gray-600">{{ $customer['whatsapp'] }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-center text-gray-600">{{ $customer['alamat'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
