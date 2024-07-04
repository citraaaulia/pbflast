<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dropdown-menu {
            display: none;
        }
        .dropdown-menu.show {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-white h-screen p-5 shadow-lg">
            <div class="flex items-center mb-10">
                <img src="{{ asset('img/logo_unand.png') }}" alt="Logo" class="h-12 w-12 mr-2">
                <span class="font-bold text-lg">Sistem Informasi Peminjaman Gedung</span>
            </div>
            <ul>
                <li class="mb-4"><a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-speedometer"></span><span class="ml-2">Dashboard</span></a></li>
                <li class="mb-4"><a href="{{ route('diajukan') }}" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-buildings"></span><span class="ml-2">Pengajuan Peminjaman</span></a></li>
                <li class="mb-4 dropdown relative">
                    <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded focus:outline-none dropdown-toggle">
                        <span class="bi bi-clock-history"></span><span class="ml-2">Riwayat Pengajuan</span>
                        <span class="bi bi-chevron-down ml-auto"></span>
                    </a>
                    <ul class="dropdown-menu absolute bg-white text-gray-700 pt-1 w-full shadow-lg rounded">
                        <li class="w-full"><a href="{{ route('riwayat.pending') }}" class="block px-4 py-2 hover:bg-gray-200">Disposisi</a></li>
                        <li class="w-full"><a href="{{ route('riwayat.ditolak') }}" class="block px-4 py-2 hover:bg-gray-200">Ditolak</a></li>
                        <li class="w-full"><a href="{{ route('riwayat.selesai') }}" class="block px-4 py-2 hover:bg-gray-200">Selesai</a></li>
                    </ul>
                </li>
                <li class="mb-4"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-file-earmark"></span><span class="ml-2">Laporan</span></a></li>
            </ul>
        </div>
        <div class="w-4/5 p-10">
            <nav class="mb-4 flex justify-end">
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(function (dropdown) {
                var toggle = dropdown.querySelector('.dropdown-toggle');
                toggle.addEventListener('click', function (event) {
                    event.preventDefault();
                    var menu = dropdown.querySelector('.dropdown-menu');
                    menu.classList.toggle('show');
                });
            });
        });
    </script>

</body>
</html>
