@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card shadow-lg border-0 text-center">
            <div class="card-body">
                <div class="profile-avatar mb-3">
    <img src="{{ asset('images/profil/profil.jpeg') }}" 
         style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 4px solid #FFD700;">
</div>
                <ul class="list-unstyled text-start">
                    <li class="mb-2">
                        <strong><i class="fas fa-calendar-alt text-success me-2"></i>Tempat, Tanggal Lahir</strong><br>
                        {{ $ttl }}
                    </li>
                    <li class="mb-2">
                        <strong><i class="fas fa-heart text-success me-2"></i>Hobi</strong><br>
                        {{ $hobi }}
                    </li>
                    <li class="mb-2">
                        <strong><i class="fas fa-rocket text-success me-2"></i>Cita-cita</strong><br>
                        {{ $cita_cita }}
                    </li>
                    <li class="mb-2">
                        <strong><i class="fas fa-graduation-cap text-success me-2"></i>Status</strong><br>
                        {{ $status }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        <div class="card shadow-lg border-0">
            <div class="card-body">
                <h3 class="mb-4"><i class="fas fa-graduation-cap text-success me-2"></i>Riwayat Pendidikan</h3>
                <ul class="list-group list-group-flush mb-4">
                    @foreach($pendidikan as $pend)
                    <li class="list-group-item">{{ $pend }}</li>
                    @endforeach
                </ul>
                
                <h3 class="mb-3"><i class="fas fa-user-circle text-success me-2"></i>Tentang Saya</h3>
                <p class="text-muted">{{ $tentang }}</p>
            </div>
        </div>
    </div>
</div>

<style>
.profile-avatar {
    width: 150px;
    height: 150px;
    margin: 0 auto;
    background: linear-gradient(135deg, #2E7D32, #1B5E20);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 4px solid #FFD700;
}
.profile-avatar i {
    font-size: 80px;
    color: white;
}
</style>
@endsection