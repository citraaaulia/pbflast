@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="mx-auto mt-8 mr-8"> 
    <h1 class="text-2xl font-semibold mb-4" style="padding-right: 80px;">Riwayat Disposisi Pending</h1>

    @if ($riwayatPending->isEmpty())
    <p class="text-gray-600 dark:text-gray-400">Tidak ada riwayat disposisi pending.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" style="padding-right: 80px;">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider"   style="border: 1px solid black;  padding: 8px; ">
                        ID Disposisi
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider"   style="border: 1px solid black;  padding: 8px; ">
                        ID Peminjaman
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider"   style="border: 1px solid black;  padding: 8px; ">
                        ID Karumahtangga
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider"   style="border: 1px solid black;  padding: 8px; ">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider"   style="border: 1px solid black;  padding: 8px; ">
                        Catatan
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider"   style="border: 1px solid black;  padding: 8px; ">
                        Tanggal Disposisi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach($riwayatPending as $disposisi)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400" style="border: 1px solid black;" align="center">{{ $disposisi->ID_Disposisi }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400" style="border: 1px solid black;" align="center">{{ $disposisi->ID_Peminjaman }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400" style="border: 1px solid black;" align="center">{{ $disposisi->ID_karumahtangga }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400" style="border: 1px solid black;" align="center">{{ $disposisi->status }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400" style="border: 1px solid black;" align="center">{{ $disposisi->catatan }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 dark:text-neutral-400" style="border: 1px solid black;" align="center">{{ $disposisi->Tanggal_disposisi }}</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection