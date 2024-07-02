@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <main class="text-center">
                
                <h1 class="text-overlay">Cari ruangan yang ingin kamu pinjam</h1>
                <p class="lead text-overlay">Jadikan Pengalaman booking gedung untuk kegiatan kamu menjadi lebih mudah</p>
                    <p class="lead">
                        <div class="card" >
                            <form action="{{ route('home') }}" method="GET">
                                <div class="input-group">
                                <select class="form-select" name="nama_gedung" aria-label="Pilih Nama Gedung">
                                    <option value="all" selected>Semua Gedung</option>
                                    @foreach($daftarGedung as $gedung)
                                        <option value="{{ $gedung->ID_gedung }}">{{ $gedung->Nama_gedung }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                               
                            </form>
                        </div>
                    </p>
                </main>
                        

            </div>
        </div>

        <hr></hr>
        <!-- daftar gedung -->
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @if($gedungs->isEmpty())
                        <div class="col-12 text-center">
                            <p class="text-muted">Tidak ada gedung yang ditemukan.</p>
                        </div>
                    @else
                        @foreach($gedungs as $gedung)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="{{ asset($gedung->foto) }}" alt="{{ $gedung->Nama_gedung }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $gedung->Nama_gedung }}</h5>
                                        <p class="card-text">{{ $gedung->keterangan }}</p>
                                        <a href="{{ route('booking.store', ['id' => $gedung->id]) }}" class="btn btn-primary">Booking</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
