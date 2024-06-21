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
                <div class="card">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Cari Gedung</option>
                        <option value="1">Auditorium</option>
                        <option value="2">Convention Hall</option>
                        <option value="3">PKM</option>
                    </select>
                        </main>
                </div>
                        

            </div>
        </div>

        <hr></hr>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{asset('img/image 5.png')}}" alt ="album"  class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Seminar I</h5>
                                <p class="card-text">memiliki kapasitas 200 orang dengan susunan bangku tribun</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>    
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{asset('img/image 6.png')}}" alt ="album"  class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Convention Hall</h5>
                                <p class="card-text">Memiliki Kapasitas 400 Orang dengan susunan bangku lantai utama dan tribun</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>    
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{asset('img/image 7.png')}}" alt ="album"  class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Seminar F</h5>
                                <p class="card-text">Memiliki kapasitas 100 Orang dengan susunan bangku tribun</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>    
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{asset('img/REGIS.png')}}" alt ="album"  class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>    
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{asset('img/REGIS.png')}}" alt ="album"  class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>    
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{asset('img/REGIS.png')}}" alt ="album"  class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
