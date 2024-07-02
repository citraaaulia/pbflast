@extends('layouts.RT')

@section('title', $title)

@section('content')

<div class="overflow-x-auto">
    <h1 class="text-2xl font-semibold mb-4">{{ $title }}</h1>

    <div id="suratForm" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="modal-content bg-white p-6 rounded-lg shadow-lg relative">
            <span class="close absolute top-2 right-2 cursor-pointer" onclick="closeForm()">&times;</span>
            <form action="{{ route('surat.disposisi.store') }}" method="POST">
                @csrf
                <input type="hidden" id="ID_Disposisi" name="ID_Disposisi">
                <input type="hidden" id="ID_karumahtangga" name="ID_karumahtangga">
                <div class="mb-4">
                    <label for="nomor_surat" class="block text-sm font-medium text-gray-700">Nomor Surat</label>
                    <input type="text" class="form-input mt-1 block w-full" id="nomor_surat" name="nomor_surat" required>
                </div>
                <div class="mb-4">
                    <label for="perihal" class="block text-sm font-medium text-gray-700">Perihal</label>
                    <input type="text" class="form-input mt-1 block w-full" id="perihal" name="perihal" required>
                </div>
                <div class="mb-4">
                    <label for="tanggal_surat" class="block text-sm font-medium text-gray-700">Tanggal Surat</label>
                    <input type="date" class="form-input mt-1 block w-full" id="tanggal_surat" name="tanggal_surat" required>
                </div>
                <div class="mb-4">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea class="form-input mt-1 block w-full" id="keterangan" name="keterangan" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Buat Disposisi</button>
            </form>
        </div>
    </div>

    @if ($Pengajuan->isEmpty())
    <p class="text-gray-600 dark:text-gray-400">Tidak ada peminjaman gedung.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" style="padding-right: 80px;">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">ID Disposisi</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">ID Peminjaman</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">ID Karumahtangga</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">Catatan</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">Tanggal Disposisi</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach ($Pengajuan as $peminjaman)
                <tr>

                <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $peminjaman->ID_Disposisi }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $peminjaman->ID_Peminjaman }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $peminjaman->ID_karumahtangga }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $peminjaman->status }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $peminjaman->catatan }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $peminjaman->Tanggal_disposisi }}</div>
                    </td>

                    <td >
                        <div class="px-6 py-1.5 flex justify-end">
                            <button class="btn btn-primary" onclick="openForm('{{ $peminjaman->ID_Disposisi }}', '{{ $peminjaman->ID_Peminjaman }}', '{{ $peminjaman->ID_karumahtangga }}')">Disposisi</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

<script>
    function openForm(ID_Disposisi, ID_Peminjaman, ID_karumahtangga) {
        document.getElementById('ID_Disposisi').value = ID_Disposisi;
        document.getElementById('ID_karumahtangga').value = ID_karumahtangga;

        document.getElementById('suratForm').style.display = 'flex';
    }

    function closeForm() {
        document.getElementById('suratForm').style.display = 'none';
    }
</script>

</style>
@endsection