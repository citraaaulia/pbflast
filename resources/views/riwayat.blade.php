<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .nav-item { cursor: pointer; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-10 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Riwayat Pengajuan</h2>
            <div class="mb-6 border-b mb-4">
                <ul class="flex text-center">
                    <li class="w-1/3 py-2 nav-item" id="diajukan-tab" onclick="showTab('diajukan')">
                        <a class="border-b-2 border-green-500 text-green-500">Diajukan</a>
                    </li>
                    <li class="w-1/3 py-2 nav-item" id="selesai-tab" onclick="showTab('selesai')">
                        <a class="text-gray-500">Selesai</a>
                    </li>
                    <li class="w-1/3 py-2 nav-item" id="ditolak-tab" onclick="showTab('ditolak')">
                        <a class="text-gray-500">Ditolak</a>
                    </li>
                </ul>
            </div>
            <div id="diajukan" class="tab-content">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2">No</th>
                            <th class="py-2">Tanggal Peminjaman</th>
                            <th class="py-2">Nama Peminjam</th>
                            <th class="py-2">Organisasi</th>
                            <th class="py-2">Kegiatan</th>
                            <th class="py-2">Skala Kegiatan</th>
                            <th class="py-2">Ruangan</th>
                            <th class="py-2">Tanggal Kegiatan</th>
                            <th class="py-2">Aksi</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diajukan as $booking)
                        <tr>
                            <td class="text-center py-2">{{ $loop->iteration }}</td>
                            <td class="text-center py-2">{{ $booking->tanggal_peminjaman }}</td>
                            <td class="text-center py-2">{{ $booking->name }}</td>
                            <td class="text-center py-2">{{ $booking->organization }}</td>
                            <td class="text-center py-2">{{ $booking->activity }}</td>
                            <td class="text-center py-2">{{ $booking->scale }}</td>
                            <td class="text-center py-2">{{ $booking->ruangan }}</td>
                            <td class="text-center py-2">{{ $booking->tanggal_kegiatan }}</td>
                            <td class="text-center py-2">
                                <button class="bg-gray-200 text-gray-700 py-1 px-2 rounded" disabled>
                                    <span class="bi bi-cloud-arrow-up"></span>
                                </button>
                                <button class="bg-red-500 text-white py-1 px-2 rounded">
                                    <span class="bi bi-x"></span>
                                </button>
                            </td>
                            <td class="text-center py-2">{{ $booking->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="selesai" class="tab-content hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2">No</th>
                            <th class="py-2">Tanggal Peminjaman</th>
                            <th class="py-2">Nama Peminjam</th>
                            <th class="py-2">Organisasi</th>
                            <th class="py-2">Kegiatan</th>
                            <th class="py-2">Skala Kegiatan</th>
                            <th class="py-2">Ruangan</th>
                            <th class="py-2">Tanggal Kegiatan</th>
                            <th class="py-2">Aksi</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($selesai as $booking)
                        <tr>
                            <td class="text-center py-2">{{ $loop->iteration }}</td>
                            <td class="text-center py-2">{{ $booking->tanggal_peminjaman }}</td>
                            <td class="text-center py-2">{{ $booking->name }}</td>
                            <td class="text-center py-2">{{ $booking->organization }}</td>
                            <td class="text-center py-2">{{ $booking->activity }}</td>
                            <td class="text-center py-2">{{ $booking->scale }}</td>
                            <td class="text-center py-2">{{ $booking->ruangan }}</td>
                            <td class="text-center py-2">{{ $booking->tanggal_kegiatan }}</td>
                            <td class="text-center py-2">
                                <button class="bg-gray-200 text-gray-700 py-1 px-2 rounded" disabled>
                                    <span class="material-icons">cloud_upload</span>
                                </button>
                                <button class="bg-red-500 text-white py-1 px-2 rounded">
                                    <span class="material-icons">delete</span>
                                </button>
                            </td>
                            <td class="text-center py-2">{{ $booking->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="ditolak" class="tab-content hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2">No</th>
                            <th class="py-2">Tanggal Peminjaman</th>
                            <th class="py-2">Nama Peminjam</th>
                            <th class="py-2">Organisasi</th>
                            <th class="py-2">Kegiatan</th>
                            <th class="py-2">Skala Kegiatan</th>
                            <th class="py-2">Ruangan</th>
                            <th class="py-2">Tanggal Kegiatan</th>
                            <th class="py-2">Aksi</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ditolak as $booking)
                        <tr>
                            <td class="text-center py-2">{{ $loop->iteration }}</td>
                            <td class="text-center py-2">{{ $booking->tanggal_peminjaman }}</td>
                            <td class="text-center py-2">{{ $booking->name }}</td>
                            <td class="text-center py-2">{{ $booking->organization }}</td>
                            <td class="text-center py-2">{{ $booking->activity }}</td>
                            <td class="text-center py-2">{{ $booking->scale }}</td>
                            <td class="text-center py-2">{{ $booking->ruangan }}</td>
                            <td class="text-center py-2">{{ $booking->tanggal_kegiatan }}</td>
                            <td class="text-center py-2">
                                <button class="bg-gray-200 text-gray-700 py-1 px-2 rounded" disabled>
                                    <span class="material-icons">cloud_upload</span>
                                </button>
                                <button class="bg-red-500 text-white py-1 px-2 rounded">
                                    <span class="material-icons">delete</span>
                                </button>
                            </td>
                            <td class="text-center py-2">{{ $booking->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function showTab(tab) {
            let tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(function (content) {
                content.classList.add('hidden');
            });
            document.getElementById(tab).classList.remove('hidden');
            document.querySelectorAll('.nav-item a').forEach(function (link) {
                link.classList.remove('border-green-500', 'text-green-500');
                link.classList.add('text-gray-500');
            });
            document.getElementById(tab + '-tab').querySelector('a').classList.add('border-green-500', 'text-green-500');
        }
        document.addEventListener('DOMContentLoaded', function () {
            showTab('diajukan');
        });
    </script>
</body>
</html>
