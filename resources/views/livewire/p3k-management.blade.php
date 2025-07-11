<div class="p-4 bg-gray-100 min-h-screen font-sans">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Manajemen Data Kotak P3K</h2>

        @if ($p3ks->isEmpty())
            <p class="text-gray-600">Belum ada data Kotak P3K.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            <th class="py-3 px-4 border-b border-gray-200">No ID</th>
                            <th class="py-3 px-4 border-b border-gray-200">Departemen</th>
                            <th class="py-3 px-4 border-b border-gray-200">Isi Kotak dan Kuantitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p3ks as $p3k)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b border-gray-200 text-gray-800">{{ $p3k->id }}</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-gray-800">{{ $p3k->departemen }}</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-gray-800">{{ $p3k->isi_kotak_dan_kuantitas }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>