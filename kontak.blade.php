@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-success">Hubungi Nadila</h1>
            <p class="lead">Silakan hubungi saya melalui kontak di bawah ini</p>
        </div>
        
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <i class="fas fa-envelope fa-3x text-success"></i>
                    <h3 class="mt-2">Info Kontak</h3>
                </div>
                
                <div class="contact-list">
                    <div class="contact-item mb-4 p-3 rounded">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon">
                                <i class="fab fa-whatsapp fa-2x text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">WhatsApp</h5>
                                <p class="mb-0 text-muted">{{ $whatsapp }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-item mb-4 p-3 rounded">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon">
                                <i class="fas fa-envelope fa-2x text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0 text-muted">{{ $email }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-item mb-4 p-3 rounded">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon">
                                <i class="fab fa-instagram fa-2x text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Instagram</h5>
                                <p class="mb-0 text-muted">{{ $instagram }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-item mb-4 p-3 rounded">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt fa-2x text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Alamat</h5>
                                <p class="mb-0 text-muted">{{ $alamat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="https://wa.me/6282390400791" class="btn btn-success btn-lg w-100">
                        <i class="fab fa-whatsapp me-2"></i>Chat via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.contact-item {
    transition: all 0.3s ease;
    cursor: pointer;
}

.contact-item:hover {
    background: #f8f9fa;
    transform: translateX(5px);
}

.contact-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
@endsection