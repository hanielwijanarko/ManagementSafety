<div class="p-4 bg-gray-100 min-h-screen font-sans">
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap)" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Manajemen Data Hydrant</h2>

        @if ($hydrants->isEmpty())
            <p class="text-gray-600">Belum ada data Hydrant.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                            <th class="py-3 px-4 border-b border-gray-200">No ID</th>
                            <th class="py-3 px-4 border-b border-gray-200">Lokasi</th>
                            <th class="py-3 px-4 border-b border-gray-200">Kondisi Hydrant</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hydrants as $hydrant)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b border-gray-200 text-gray-800">{{ $hydrant->id }}</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-gray-800">{{ $hydrant->lokasi }}</td>
                                <td class="py-3 px-4 border-b border-gray-200 text-gray-800">{{ $hydrant->kondisi_hydrant }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>