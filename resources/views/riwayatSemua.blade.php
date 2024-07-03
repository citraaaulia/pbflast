@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="mx-auto mt-8 mr-8">
    <h1 class="text-2xl font-semibold mb-4" style="padding-right: 80px;">Laporan Rekapitulasi</h1>

    @if ($riwayatSemua->isEmpty())
    <p class="text-gray-600 dark:text-gray-400">Tidak ada riwayat rekapitulasi.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" style="padding-right: 80px;">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" >
                        ID Disposisi
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" >
                        ID Peminjaman
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" >
                        ID Karumahtangga
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" >
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" >
                        Tanggal Disposisi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach($riwayatSemua as $disposisi)
            <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->ID_Disposisi }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->ID_Peminjaman }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->ID_karumahtangga }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->status }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->Tanggal_disposisi }}</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection