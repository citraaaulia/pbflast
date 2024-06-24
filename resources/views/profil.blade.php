<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-10 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold">Profil Pengguna</h2>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('booking.show') }}" class="text-gray-700">Cari Ruangan</a></li>
                        <li><a href="{{ route('riwayat.show') }}" class="text-gray-700">Histori</a></li>
                        <li><a href="#" class="text-green-500">Profil</a></li>
                    </ul>
                </nav>
            </div>
            <div class="flex items-center mb-10">
                <div class="w-32 h-32 rounded-full overflow-hidden">
                    <img src="Foto_Profil.jpeg" alt="Profile Picture" class="w-full h-full object-cover">
                </div>
                <div class="ml-6">
                    <h3 class="text-2xl font-bold">Briana Firsta</h3>
                    <p class="text-gray-600">2111522024</p>
                    <p class="text-gray-600">Sistem Informasi</p>
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow">
                <h4 class="text-xl font-bold mb-4">Informasi Personal</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-gray-600">Nama Awal</p>
                        <p class="font-bold">Briana</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Nama Akhir</p>
                        <p class="font-bold">Firsta</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Nomor Induk Mahasiswa</p>
                        <p class="font-bold">2111522024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
