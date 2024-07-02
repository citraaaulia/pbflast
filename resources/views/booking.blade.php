<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Gedung</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .ui-datepicker .ui-datepicker-calendar .ui-state-disabled span {
            background-color: #e2e8f0 !important; /* bg-gray-200 */
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 max-w-4xl">
       
    <div class="container mx-auto mt-10">
        <div class="bg-white p-10 rounded-lg shadow-lg">
            <!-- Navigation and Search Section -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <!-- Back Button -->
                    <button class="text-gray-600 hover:text-gray-800" onclick="window.location.href='{{ route('home') }}'">
                        <span class="bi bi-chevron-left"></span>
                    </button>
                    <!-- Search Bar -->
                    <div class="ml-4 relative text-gray-600">
                        <input type="search" name="search" placeholder="Cari ruangan lain" class="bg-gray-200 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                        <button type="submit" class="absolute right-0 top-0 mt-2 mr-4">
                            <span class="bi bi-search"></span>
                        </button>
                    </div>
                </div>
                <!-- History and Profile Icons -->
                <div class="flex items-center space-x-6">
                    <button class="text-gray-600 hover:text-gray-800">
                        <a href="{{ route('riwayat.show') }}" class="bi bi-clock-history"></a></li>
                    </button>
                    <button class="text-gray-600 hover:text-gray-800">
                        <a href="{{ route('profil.show') }}" class="bi bi-person"></a></li>
                    </button>
                </div>
            </div>


            <!-- Main Content -->
            <div class="flex justify-between">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Gedung Seminar I</h2>
                    <div class="mb-6">
                        <div id="calendar"></div>
                    </div>
                </div>
                <div class="ml-10">
                    <h2 class="text-2xl font-bold mb-4">Isi Formulir</h2>
                    @if(session('success'))
                        <div class="bg-green-500 text-white p-4 mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Nama Peminjam</label>
                            <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded mt-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="organization" class="block text-gray-700">Organisasi</label>
                            <input type="text" name="organization" id="organization" class="w-full p-2 border border-gray-300 rounded mt-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="activity" class="block text-gray-700">Kegiatan</label>
                            <input type="text" name="activity" id="activity" class="w-full p-2 border border-gray-300 rounded mt-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="scale" class="block text-gray-700">Skala Kegiatan</label>
                            <select name="scale" id="scale" class="w-full p-2 border border-gray-300 rounded mt-2" required>
                                <option value="" selected disabled>Pilih skala kegiatan</option>
                                <option value="Jurusan">Jurusan</option>
                                <option value="Fakultas">Fakultas</option>
                                <option value="Universitas">Universitas</option>
                            </select>
                        </div>
                        <input type="hidden" id="selectedDate" name="tanggal_kegiatan" required>
                        <input type="hidden" id="currentDate" name="tanggal_peminjaman" value="{{ now()->toDateString() }}">
                        <button type="submit" class="w-full py-2 px-4 bg-green-500 text-white rounded">Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            var bookedDates = ["2023-03-15", "2023-03-16"]; // Replace with actual booked dates

            function disableBookedDates(date) {
                var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                return [bookedDates.indexOf(string) === -1];
            }

            $("#calendar").datepicker({
                dateFormat: "yy-mm-dd",
                beforeShowDay: disableBookedDates,
                onSelect: function(dateText) {
                    $("#selectedDate").val(dateText);
                }
            });

            $("#bookingForm").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route("booking.store") }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Booking berhasil!');
                        location.reload();
                    },
                    error: function(response) {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
</body>
</html>
