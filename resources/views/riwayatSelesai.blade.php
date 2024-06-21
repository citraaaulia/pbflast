@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="mx-auto mt-8 mr-8">
    <h1 class="text-2xl font-semibold mb-4" style="padding-right: 80px;">Riwayat Disposisi Selesai</h1>

    @if ($riwayatSelesai->isEmpty())
    <p class="text-gray-600 dark:text-gray-400">Tidak ada riwayat disposisi pending.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" style="padding-right: 80px;">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <th>
                        ID Disposisi
                    </th>
                    <th>
                        ID Peminjaman
                    </th>
                    <th>
                        ID Karumahtangga
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Catatan
                    </th>
                    <th>
                        Tanggal Disposisi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach($riwayatSelesai as $disposisi)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>{{ $disposisi->ID_Disposisi }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>{{ $disposisi->ID_Peminjaman }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>{{ $disposisi->ID_karumahtangga }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>{{ $disposisi->status }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>{{ $disposisi->catatan }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>{{ $disposisi->Tanggal_disposisi }}</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection