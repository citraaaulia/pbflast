@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="container mt-8"> 
    <h1 class="text-2xl font-semibold mb-4">Riwayat Disposisi Pending</h1>

    @if ($riwayatPending->isEmpty())
    <p class="text-gray-600 dark:text-gray-400">Tidak ada riwayat disposisi pending.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" style="border: 1px solid black;">
                        ID Disposisi
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" style="border: 1px solid black;">
                        ID Peminjaman
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" style="border: 1px solid black;">
                        ID Karumahtangga
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" style="border: 1px solid black;">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" style="border: 1px solid black;">
                        Catatan
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-300 uppercase tracking-wider" style="border: 1px solid black;">
                        Tanggal Disposisi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach($riwayatPending as $disposisi)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap" style="border: 1px solid black;" align="center">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->ID_Disposisi }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap" style="border: 1px solid black;" align="center">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->ID_Peminjaman }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap" style="border: 1px solid black;" align="center">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->ID_karumahtangga }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap" style="border: 1px solid black;" align="center">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->status }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap" style="border: 1px solid black;" align="center">
                        <div class="text-sm text-gray-900 dark:text-neutral-400">{{ $disposisi->catatan }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap" style="border: 1px solid black;" align="center">
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
