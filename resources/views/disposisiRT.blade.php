@extends('layouts.RT')

@section('title', $title)

@section('content')

<div class="mx-auto">
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
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" style="border: 1px solid black;">
            <thead class="bg-gray-50 dark:bg-neutral-800" style="border: 1px solid black;">
                <tr>
                    <th style="border: 1px solid black;  padding: 8px; ">ID Disposisi</th>
                    <th style="border: 1px solid black;  padding: 8px; ">ID Peminjaman</th>
                    <th style="border: 1px solid black;  padding: 8px; ">ID Karumahtangga</th>
                    <th style="border: 1px solid black;  padding: 8px; ">Status</th>
                    <th style="border: 1px solid black;  padding: 8px; ">Catatan</th>
                    <th style="border: 1px solid black;  padding: 8px; ">Tanggal Disposisi</th>
                    <th style="border: 1px solid black;  padding: 8px; ">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach ($Pengajuan as $peminjaman)
                <tr>
                    <td style="border: 1px solid black;" align="center" >{{ $peminjaman->ID_Disposisi }}</td>
                    <td style="border: 1px solid black;" align="center" >{{ $peminjaman->ID_Peminjaman }}</td>
                    <td style="border: 1px solid black;" align="center" >{{ $peminjaman->ID_karumahtangga }}</td>
                    <td style="border: 1px solid black;" align="center" >{{ $peminjaman->status }}</td>
                    <td style="border: 1px solid black;" align="center" >{{ $peminjaman->catatan }}</td>
                    <td style="border: 1px solid black;" align="center" >{{ $peminjaman->Tanggal_disposisi }}</td>
                    <td style="border: 1px solid black;" align="center" >
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

<style>
    .modal {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 50;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fff;
        padding: 1.5rem;
        border-radius: 0.5rem;
        position: relative;
        max-width: 500px;
        width: 100%;
    }

    .close {
        font-size: 1.25rem;
        cursor: pointer;
    }
</style>
@endsection