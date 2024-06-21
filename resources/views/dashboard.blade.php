<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-white h-screen p-5 shadow-lg">
            <div class="flex items-center mb-10">
                <img src="Logo_Unand.png" alt="Logo" class="h-12 w-12 mr-2">
                <span class="font-bold text-lg">Sistem Informasi Peminjaman Gedung</span>
            </div>
            <ul>
                <li class="mb-4"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-speedometer"></span><span class="ml-2">Dashboard</span></a></li>
                <li class="mb-4"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-buildings"></span><span class="ml-2">Pengajuan Peminjaman</span></a></li>
                <li class="mb-4"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-clock-history"></span><span class="ml-2">Riwayat Pengajuan</span></a></li>
                <li class="mb-4"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-calendar"></span><span class="ml-2">Manajemen Kalender</span></a></li>
                <li class="mb-4"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-file-earmark"></span><span class="ml-2">Laporan</span></a></li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="w-4/5 p-10">
            <h1 class="text-2xl font-bold mb-10">Dashboard</h1>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h2 class="text-lg font-bold">Jumlah Pengajuan</h2>
                    <p class="text-4xl">{{ $jumlahPengajuan }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h2 class="text-lg font-bold">Jumlah Pengajuan Ditolak</h2>
                    <p class="text-4xl">{{ $jumlahPengajuanDitolak }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h2 class="text-lg font-bold">Disposisi yang Dibutuhkan</h2>
                    <p class="text-4xl">{{ $disposisiDibutuhkan }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
