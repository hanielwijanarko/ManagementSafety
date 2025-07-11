<div class="p-4 bg-gray-100 min-h-screen font-sans">
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap)" rel="stylesheet">
    <style>
        /* Menerapkan font Inter ke seluruh body */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Bagian Header -->
        <div class="bg-yellow-400 p-4 text-center rounded-t-lg">
            <h1 class="text-2xl font-bold text-gray-800">Safety Performance Board</h1>
            <h2 class="text-lg font-medium text-gray-700">PT Sinar Tambang Arthaleastari</h2>
        </div>

        <!-- Bagian Status Keselamatan -->
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-700">SAFETY STATUS</h3>
                <div class="flex items-center space-x-4 text-gray-700">
                    <span>TAHUN <br> YEAR</span>
                    <span class="text-2xl font-bold">{{ $year }}</span>
                    <span>BULAN <br> MONTH</span>
                    <span class="text-2xl font-bold">{{ $month }}</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <!-- Total Jam Kerja -->
                <div class="bg-blue-600 text-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm">JUMLAH JAM KERJA</p>
                    <p class="text-lg font-semibold">TOTAL MAN HOURS</p>
                    <p class="text-3xl font-bold mt-2">{{ $totalManHours }}</p>
                </div>

                <!-- Kecelakaan Terbaru -->
                <div class="bg-blue-600 text-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm">KEJADIAN KECELAKAAN TERAKHIR</p>
                    <p class="text-lg font-semibold">THE LATEST ACCIDENT</p>
                    <p class="text-3xl font-bold mt-2">{{ $latestAccidentDate }}</p>
                    <p class="text-sm mt-1">JAM</p>
                    <p class="text-3xl font-bold">{{ $latestAccidentHours }} HOURS</p>
                </div>

                <!-- Kematian -->
                <div class="bg-red-600 text-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm">MENINGGAL</p>
                    <p class="text-lg font-semibold">FATALITY</p>
                    <p class="text-3xl font-bold mt-2">{{ $fatalities }}</p>
                </div>

                <!-- Kerugian Properti -->
                <div class="bg-red-600 text-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm">KERUGIAN BARANG</p>
                    <p class="text-lg font-semibold">PROPERTY DAMAGE</p>
                    <p class="text-3xl font-bold mt-2">{{ $propertyDamage }}</p>
                </div>
            </div>

            <div class="bg-green-600 text-white p-4 rounded-lg text-center font-bold text-xl shadow-sm">
                UTAMAKAN KESELAMATAN DAN KESEHATAN KERJA
            </div>
            <p class="text-center text-gray-600 text-sm mt-4">Selamat datang di APLIKASI SH-STAR_Safety and Health section.</p>
        </div>

        <!-- Bagian Ikon Navigasi -->
        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-4 p-6 border-t border-gray-200">
            <!-- PKSB -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">👷‍♀️</span> <!-- Emoji Pekerja -->
                </div>
                <span class="text-sm font-medium text-center">PKSB</span>
            </div>
            <!-- APAR -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">🧯</span> <!-- Emoji Pemadam Api -->
                </div>
                <span class="text-sm font-medium text-center">APAR</span>
            </div>
            <!-- Kotak P3K -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">🩹</span> <!-- Emoji Plester -->
                </div>
                <span class="text-sm font-medium text-center">Kotak P3K</span>
            </div>
            <!-- Hydrant -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">🚰</span> <!-- Emoji Keran Air (untuk Hydrant) -->
                </div>
                <span class="text-sm font-medium text-center">Hydrant</span>
            </div>
            <!-- Induction -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">🏠</span> <!-- Emoji Rumah -->
                </div>
                <span class="text-sm font-medium text-center">Induction</span>
            </div>
            <!-- Commisioning -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">🏗️</span> <!-- Emoji Konstruksi (untuk Commisioning) -->
                </div>
                <span class="text-sm font-medium text-center">Commisioning</span>
            </div>
            <!-- Vacant -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">🚫</span> <!-- Emoji Larangan (untuk Vacant) -->
                </div>
                <span class="text-sm font-medium text-center">Vacant</span>
            </div>
            <!-- Other -->
            <div class="flex flex-col items-center justify-center text-gray-700">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-2 shadow-md">
                    <span class="text-4xl">...</span> <!-- Emoji Lain-lain -->
                </div>
                <span class="text-sm font-medium text-center">Other</span>
            </div>
        </div>

        <!-- Navigasi Bawah -->
        <div class="flex justify-around items-center p-4 bg-white border-t border-gray-200 shadow-lg">
            <a href="#" class="flex flex-col items-center text-blue-600">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-1">
                    <span class="text-xl">👤</span>
                </div>
                <span class="text-xs font-medium">Akun</span>
            </a>
            <a href="#" class="flex flex-col items-center text-blue-600">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-1">
                    <span class="text-xl">📖</span>
                </div>
                <span class="text-xs font-medium">Panduan</span>
            </a>
            <a href="#" class="flex flex-col items-center text-blue-600">
                <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mb-1 shadow-lg">
                    <span class="text-2xl">🚨</span> <!-- Emoji Peringatan/Bell -->
                </div>
                <span class="text-xs font-medium"></span>
            </a>
            <a href="#" class="flex flex-col items-center text-blue-600">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-1">
                    <span class="text-xl">⚙️</span>
                </div>
                <span class="text-xs font-medium">Setting</span>
            </a>
            <a href="#" class="flex flex-col items-center text-blue-600">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-1">
                    <span class="text-xl">➡️</span>
                </div>
                <span class="text-xs font-medium">LogOut</span>
            </a>
        </div>
    </div>
</div>