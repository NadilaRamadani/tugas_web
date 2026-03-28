@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-success">Cerita Idul Fitri</h1>
            <p class="lead">Pengalaman saya saat merayakan hari kemenangan</p>
            <div class="border-bottom border-success w-25 mx-auto my-3"></div>
            <p class="text-muted">
                <i class="far fa-calendar-alt me-2"></i>{{ $cerita['tanggal'] }}
            </p>
        </div>
        
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <h2 class="text-success mb-4">
                    <i class="fas fa-book-open me-2"></i>{{ $cerita['judul'] }}
                </h2>
                <h5 class="text-muted mb-4">
                    <i class="fas fa-quote-left me-2"></i>{{ $cerita['subjudul'] }}
                </h5>
                <p class="lead" style="line-height: 1.8;">{{ $cerita['isi'] }}</p>
            </div>
        </div>
        
        <!-- Quote -->
        <div class="text-center mt-5">
            <div class="p-4 bg-light rounded">
                <i class="fas fa-quote-right fa-2x text-success mb-3"></i>
                <p class="fs-5 fst-italic">"Taqabbalallahu minna wa minkum, shiyamana wa shiyamakum"</p>
                <p class="mb-0">Semoga Allah menerima amal ibadah kita semua</p>
            </div>
        </div>
    </div>
</div>
@endsection