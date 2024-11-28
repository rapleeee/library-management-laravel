<x-app-layout>
    <section class="p-4 sm:p-6 bg-gray-50 dark:bg-gray-900 lg:pl-64">
        <div class="mx-auto max-w-screen-xl">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Daftar Buku yang Dipinjam</h1>

            @if($loans->isEmpty())
                <p class="text-gray-700 dark:text-gray-300">Belum ada buku yang dipinjam.</p>
            @else
                <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">Judul Buku</th>
                                <th class="px-6 py-3">Penulis</th>
                                <th class="px-6 py-3">Tanggal Pinjam</th>
                                <th class="px-6 py-3">Tanggal Kembali</th>
                                <th class="px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loans as $loan)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">
                                        {{ $loan->book->judul_buku }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $loan->book->penulis }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $loan->tanggal_pinjam }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $loan->tanggal_kembali ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full
                                            {{ $loan->status === 'borrowed' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                                            {{ ucfirst($loan->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
