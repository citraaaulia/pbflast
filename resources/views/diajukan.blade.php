@extends('layouts.main')

@section('title', $title)

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container mt-8">
<h1 class="text-2xl font-semibold mb-4">Diajukan</h1>
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
                                <!-- Tombol ceklis -->
                                <button class="bg-green-500 text-white py-1 px-2 rounded" onclick="openApprovalModal({{ $booking->id }})">
                                    <i class="bi bi-check"></i>
                                </button>
                                <!-- Tombol silang -->
                                <button class="bg-red-500 text-white py-1 px-2 rounded" onclick="openApprovalModal({{ $booking->id }})">
                                    <i class="bi bi-x"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>

@include('modals.approval-modal')

<script>
    function openApprovalModal(id) {
        $('#booking_id').val(id);
        $('#approvalModal').modal('show');
    }

    $('#approvalForm').submit(function(event) {
        event.preventDefault();
        
        const bookingId = $('#booking_id').val();
        const catatan = $('#catatan').val();
        const status = $('#status').val();

        $.ajax({
            url: "{{ route('approve.booking') }}",
            type: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                booking_id: bookingId,
                catatan: catatan,
                status: status
            },
            success: function(response) {
                if(response.success) {
                    $('#approvalModal').modal('hide');
                    location.reload();
                } else {
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Tambahkan ini untuk debug error
                alert('Terjadi kesalahan. Silakan coba lagi.');
            }
        });
    });
</script>

@endsection
