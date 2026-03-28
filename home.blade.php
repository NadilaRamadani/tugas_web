@extends('layouts.main')

@section('title', $title)

@section('content')
<!-- Hero Section dengan Background Gradien -->
<div class="hero-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-10 text-center">
                <!-- Animasi Ketupat -->
                <div class="ketupat-wrapper mb-3">
                    <div class="ketupat-container">
                        <div class="ketupat-item"></div>
                        <div class="ketupat-item"></div>
                        <div class="ketupat-item"></div>
                        <div class="ketupat-item"></div>
                        <div class="ketupat-center">
                            <i class="fas fa-star-and-crescent"></i>
                        </div>
                    </div>
                </div>
                
                <h1 class="hero-title mb-2">
                    <i class="fas fa-moon-star me-2"></i>Selamat Hari Raya
                </h1>
                <h2 class="hero-subtitle mb-3">
                    Idul Fitri 1447 H
                </h2>
                
                <div class="greeting-card">
                    <p class="greeting-text mb-2">
                        Saya <strong>Nadila Ramadani</strong> mengucapkan
                    </p>
                    <p class="greeting-message mb-2">
                        "Mohon Maaf Lahir dan Batin"
                    </p>
                    <p class="greeting-desc">
                        <i class="fas fa-heart text-danger me-2"></i>
                        Semoga hari yang suci ini membawa kebahagiaan, keberkahan, 
                        dan mempererat tali silaturahmi kita semua.
                        <i class="fas fa-heart text-danger ms-2"></i>
                    </p>
                </div>
                
                <div class="button-group mt-3">
                    <a href="{{ route('profil') }}" class="btn btn-primary-custom me-2">
                        <i class="fas fa-user me-2"></i>Profil Saya
                    </a>
                    <a href="{{ route('kontak') }}" class="btn btn-outline-custom">
                        <i class="fas fa-envelope me-2"></i>Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ========== HERO SECTION - UKURAN DIPERKECIL ========== */
.hero-section {
    background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 50%, #1B5E20 100%);
    position: relative;
    padding: 40px 0;
    overflow: hidden;
    margin: 20px;
    border-radius: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Background Pattern */
.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><path fill="white" d="M10,10 L20,10 L15,20 Z M30,30 L40,30 L35,40 Z M50,50 L60,50 L55,60 Z M70,70 L80,70 L75,80 Z M90,90 L100,90 L95,100 Z"/><circle cx="25" cy="75" r="5" fill="white"/><circle cx="75" cy="25" r="5" fill="white"/></svg>');
    background-repeat: repeat;
    background-size: 30px;
    pointer-events: none;
    border-radius: 30px;
}

/* ========== KETUPAT ANIMATION - DIPERKECIL ========== */
.ketupat-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
}

.ketupat-container {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto;
}

.ketupat-item {
    position: absolute;
    width: 26px;
    height: 26px;
    background: #FFD700;
    transform: rotate(45deg);
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.ketupat-item:nth-child(1) {
    top: 0;
    left: 27px;
    animation: float 3s ease-in-out infinite;
}
.ketupat-item:nth-child(2) {
    top: 27px;
    right: 0;
    animation: float 3s ease-in-out infinite 0.5s;
}
.ketupat-item:nth-child(3) {
    bottom: 0;
    left: 27px;
    animation: float 3s ease-in-out infinite 1s;
}
.ketupat-item:nth-child(4) {
    top: 27px;
    left: 0;
    animation: float 3s ease-in-out infinite 1.5s;
}

.ketupat-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 34px;
    height: 34px;
    background: #FFA500;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 12px rgba(255,215,0,0.5);
    animation: pulse 2s ease-in-out infinite;
}

.ketupat-center i {
    font-size: 16px;
    color: white;
}

@keyframes float {
    0%, 100% { transform: rotate(45deg) translateY(0); }
    50% { transform: rotate(45deg) translateY(-5px); }
}

@keyframes pulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); box-shadow: 0 0 12px rgba(255,215,0,0.5); }
    50% { transform: translate(-50%, -50%) scale(1.05); box-shadow: 0 0 20px rgba(255,215,0,0.8); }
}

/* ========== TYPOGRAPHY - DIPERKECIL ========== */
.hero-title {
    font-size: 1.8rem;
    font-weight: bold;
    color: white;
    margin-bottom: 8px;
}

.hero-subtitle {
    font-size: 1.5rem;
    font-weight: bold;
    color: #FFD700;
    margin-bottom: 15px;
}

/* ========== GREETING CARD - DIPERKECIL ========== */
.greeting-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    padding: 20px;
    margin: 15px 0;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.greeting-card:hover {
    transform: translateY(-2px);
}

.greeting-text {
    font-size: 0.9rem;
    margin-bottom: 8px;
    color: #333;
}

.greeting-text strong {
    color: #2E7D32;
}

.greeting-message {
    font-size: 1.1rem;
    font-weight: bold;
    color: #2E7D32;
    margin-bottom: 12px;
}

.greeting-desc {
    font-size: 0.85rem;
    color: #555;
    line-height: 1.5;
}

/* ========== BUTTONS - DIPERKECIL ========== */
.btn-primary-custom {
    background: linear-gradient(135deg, #FFD700, #FFA500);
    border: none;
    padding: 8px 20px;
    font-weight: 600;
    font-size: 0.85rem;
    color: #2E7D32;
    transition: all 0.3s ease;
    border-radius: 50px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    display: inline-block;
    text-decoration: none;
}

.btn-primary-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    color: #1B5E20;
    text-decoration: none;
}

.btn-outline-custom {
    background: transparent;
    border: 2px solid #FFD700;
    padding: 8px 20px;
    font-weight: 600;
    font-size: 0.85rem;
    color: #FFD700;
    transition: all 0.3s ease;
    border-radius: 50px;
    display: inline-block;
    text-decoration: none;
}

.btn-outline-custom:hover {
    background: #FFD700;
    color: #2E7D32;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    text-decoration: none;
}

/* ========== BUTTON GROUP ========== */
.button-group {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
}

/* ========== RESPONSIVE ========== */
@media (max-width: 768px) {
    .hero-section {
        padding: 30px 15px;
        margin: 15px;
        border-radius: 20px;
    }
    
    .hero-title {
        font-size: 1.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
    }
    
    .greeting-card {
        padding: 15px;
    }
    
    .greeting-message {
        font-size: 1rem;
    }
    
    .greeting-desc {
        font-size: 0.8rem;
    }
    
    .btn-primary-custom, .btn-outline-custom {
        padding: 6px 16px;
        font-size: 0.8rem;
    }
    
    .button-group {
        flex-direction: column;
        gap: 8px;
        align-items: center;
    }
    
    .button-group a {
        width: 80%;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .ketupat-container {
        width: 65px;
        height: 65px;
    }
    
    .ketupat-item {
        width: 22px;
        height: 22px;
    }
    
    .ketupat-item:nth-child(1) { left: 22px; }
    .ketupat-item:nth-child(2) { top: 22px; }
    .ketupat-item:nth-child(3) { left: 22px; }
    .ketupat-item:nth-child(4) { top: 22px; }
    
    .ketupat-center {
        width: 28px;
        height: 28px;
    }
    
    .ketupat-center i {
        font-size: 13px;
    }
    
    .hero-title {
        font-size: 1.3rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .greeting-text {
        font-size: 0.8rem;
    }
    
    .greeting-message {
        font-size: 0.9rem;
    }
    
    .greeting-desc {
        font-size: 0.75rem;
    }
}
</style>
@endsection