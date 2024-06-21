<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <button class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <h2>Ditolak</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Nama Peminjam</th>
                    <th>Organisasi</th>
                    <th>Kegiatan</th>
                    <th>Skala Kegiatan</th>
                    <th>Ruangan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>10/03/2024</td>
                    <td>Briana Firsta</td>
                    <td>HMSI Unand</td>
                    <td>Pengkaderan</td>
                    <td>Jurusan</td>
                    <td>Gedung Seminar I</td>
                    <td>20/03/2024</td>
                    <td>Ditolak</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
