<div class="w-1/5 bg-white h-screen p-5 shadow-lg d-flex flex-column">
    <div class="flex items-center mb-10">
        <img src="{{ asset('img/logo_unand.png') }}" alt="Logo" class="h-12 w-12 mr-2">
        <span class="font-bold text-lg">Sistem Informasi Peminjaman Gedung</span>
    </div>
    <ul class="list-unstyled">
        <li class="mb-4"><a href="{{ route('dashboard') }}" class="d-flex align-items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-speedometer"></span><span class="ml-2">Dashboard</span></a></li>
        <li class="mb-4"><a href="{{ route('diajukan') }}" class="d-flex align-items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-buildings"></span><span class="ml-2">Pengajuan Peminjaman</span></a></li>
        <li class="mb-4 dropdown relative">
            <a href="#" class="d-flex align-items-center p-2 text-gray-700 hover:bg-gray-200 rounded focus:outline-none dropdown-toggle">
                <span class="bi bi-clock-history"></span><span class="ml-2">Riwayat Pengajuan</span>
            </a>
            <ul class="dropdown-menu position-absolute bg-white text-gray-700 pt-1 w-100 shadow-lg rounded">
                <li class="w-100"><a href="{{ route('riwayat.pending') }}" class="d-block px-4 py-2 hover:bg-gray-200">Disposisi</a></li>
                <li class="w-100"><a href="{{ route('riwayat.ditolak') }}" class="d-block px-4 py-2 hover:bg-gray-200">Ditolak</a></li>
                <li class="w-100"><a href="{{ route('riwayat.selesai') }}" class="d-block px-4 py-2 hover:bg-gray-200">Selesai</a></li>
            </ul>
        </li>
        <li class="mb-4"><a href="#" class="d-flex align-items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-calendar"></span><span class="ml-2">Manajemen Kalender</span></a></li>
        <li class="mb-4"><a href="#" class="d-flex align-items-center p-2 text-gray-700 hover:bg-gray-200 rounded"><span class="bi bi-file-earmark"></span><span class="ml-2">Laporan</span></a></li>
    </ul>
</div>
