@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="text-center mb-5">
    <h1 class="display-4 fw-bold text-success">Galeri Lebaran 2024</h1>
    <p class="lead">Foto-foto momen indah selama hari raya</p>
    
    <!-- Tombol Filter -->
    <div class="filter-buttons">
        <button class="filter-btn active" onclick="filterGallery('all')">
            <i class="fas fa-th-large me-2"></i>Semua
        </button>
        <button class="filter-btn" onclick="filterGallery('sendiri')">
            <i class="fas fa-user me-2"></i>Foto Sendiri
        </button>
        <button class="filter-btn" onclick="filterGallery('teman')">
            <i class="fas fa-user-friends me-2"></i>Bersama Teman
        </button>
        <button class="filter-btn" onclick="filterGallery('keluarga')">
            <i class="fas fa-users me-2"></i>Bersama Keluarga
        </button>
    </div>
</div>

<div class="row g-4" id="gallery-container">
    <!-- ========== FOTO SENDIRI ========== -->
    <div class="col-md-6 col-lg-4 gallery-item sendiri" data-category="sendiri">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/sendiri/foto1.jpg') }}" 
                 class="card-img-top" 
                 alt="Foto Selfie Lebaran 2024"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Foto+Selfie'">
            <div class="gallery-caption">
                <i class="fas fa-camera text-success me-2"></i> Foto Selfie Lebaran 2024
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4 gallery-item sendiri" data-category="sendiri">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/sendiri/foto2.jpg') }}" 
                 class="card-img-top" 
                 alt="Momen Lebaran dengan Baju Baru"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Baju+Baru'">
            <div class="gallery-caption">
                <i class="fas fa-camera text-success me-2"></i> Momen Lebaran dengan Baju Baru
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4 gallery-item sendiri" data-category="sendiri">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/sendiri/foto3.jpg') }}" 
                 class="card-img-top" 
                 alt="Selfie di Masjid"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Selfie+Masjid'">
            <div class="gallery-caption">
                <i class="fas fa-camera text-success me-2"></i> Selfie di Masjid
            </div>
        </div>
    </div>
    
    <!-- ========== FOTO TEMAN ========== -->
    <div class="col-md-6 col-lg-4 gallery-item teman" data-category="teman">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/teman/teman1.jpg') }}" 
                 class="card-img-top" 
                 alt="Bersama Teman"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Bersama+Teman'">
            <div class="gallery-caption">
                <i class="fas fa-user-friends text-success me-2"></i> Bersama Teman
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4 gallery-item teman" data-category="teman">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/teman/teman2.jpg') }}" 
                 class="card-img-top" 
                 alt="Foto Bersama Sepupu"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Foto+Sepupu'">
            <div class="gallery-caption">
                <i class="fas fa-user-friends text-success me-2"></i> Foto Bersama Sepupu
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4 gallery-item teman" data-category="teman">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/teman/teman3.jpg') }}" 
                 class="card-img-top" 
                 alt="Dengan Kakak Sepupu"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Kakak+Sepupu'">
            <div class="gallery-caption">
                <i class="fas fa-user-friends text-success me-2"></i> Dengan Kakak Sepupu
            </div>
        </div>
    </div>
    
    <!-- ========== FOTO KELUARGA ========== -->
    <div class="col-md-6 col-lg-4 gallery-item keluarga" data-category="keluarga">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/keluarga/keluarga1.jpg') }}" 
                 class="card-img-top" 
                 alt="Foto Keluarga Besar"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Keluarga+Besar'">
            <div class="gallery-caption">
                <i class="fas fa-users text-success me-2"></i> Foto Keluarga Besar
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4 gallery-item keluarga" data-category="keluarga">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/keluarga/keluarga2.jpg') }}" 
                 class="card-img-top" 
                 alt="Buka Puasa Bersama Keluarga"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Buka+Puasa'">
            <div class="gallery-caption">
                <i class="fas fa-users text-success me-2"></i> Buka Puasa Bersama Keluarga
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4 gallery-item keluarga" data-category="keluarga">
        <div class="gallery-card" onclick="showImageModal(this)">
            <img src="{{ asset('images/keluarga/keluarga3.jpg') }}" 
                 class="card-img-top" 
                 alt="Momen Silaturahmi"
                 onerror="this.src='https://via.placeholder.com/600x450/2E7D32/FFFFFF?text=Silaturahmi'">
            <div class="gallery-caption">
                <i class="fas fa-users text-success me-2"></i> Momen Silaturahmi
            </div>
        </div>
    </div>
</div>

<!-- Modal Preview Gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background: #2E7D32; color: white;">
                <h5 class="modal-title">
                    <i class="fas fa-image me-2"></i>Preview Foto
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center p-4">
                <img id="modalImage" src="" class="img-fluid rounded" alt="Preview" style="max-height: 70vh; width: auto; margin: 0 auto;">
                <div id="modalCaption" class="mt-3 text-muted fs-5"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<style>
/* ========== FILTER BUTTONS ========== */
.filter-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.filter-btn {
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 600;
    border: 2px solid #2E7D32;
    background: transparent;
    color: #2E7D32;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn i {
    font-size: 14px;
    margin-right: 8px;
}

.filter-btn:hover,
.filter-btn.active {
    background: #2E7D32;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(46,125,50,0.3);
}

/* ========== GALLERY CARD ========== */
.gallery-card {
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.gallery-card .card-img-top {
    width: 100%;
    height: 280px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-card:hover .card-img-top {
    transform: scale(1.05);
}

.gallery-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(0,0,0,0.2);
}

.gallery-caption {
    padding: 16px;
    text-align: center;
    font-weight: 600;
    font-size: 1rem;
    background: white;
    color: #2E7D32;
    border-top: 1px solid #eee;
    margin-top: auto;
}

/* ========== FILTER ANIMATION ========== */
.gallery-item {
    transition: all 0.4s ease;
    margin-bottom: 24px;
}

.gallery-item.hide {
    display: none;
}

.gallery-item.show {
    display: block;
    animation: fadeInUp 0.5s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ========== RESPONSIVE ========== */
@media (max-width: 992px) {
    .gallery-card .card-img-top {
        height: 260px;
    }
}

@media (max-width: 768px) {
    .filter-btn {
        padding: 8px 20px;
        font-size: 14px;
    }
    
    .gallery-card .card-img-top {
        height: 240px;
    }
    
    .gallery-caption {
        padding: 12px;
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .filter-buttons {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 6px 16px;
        font-size: 12px;
    }
    
    .gallery-card .card-img-top {
        height: 200px;
    }
    
    .gallery-caption {
        padding: 10px;
        font-size: 0.85rem;
    }
}
</style>

<script>
// Fungsi untuk filter galeri
function filterGallery(category) {
    const buttons = document.querySelectorAll('.filter-btn');
    buttons.forEach(btn => {
        btn.classList.remove('active');
        if (btn.textContent.includes(category === 'all' ? 'Semua' : 
            (category === 'sendiri' ? 'Foto Sendiri' : 
             (category === 'teman' ? 'Bersama Teman' : 'Bersama Keluarga')))) {
            btn.classList.add('active');
        }
    });
    
    const items = document.querySelectorAll('.gallery-item');
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.classList.remove('hide');
            item.classList.add('show');
        } else {
            item.classList.remove('show');
            item.classList.add('hide');
        }
    });
}

// Fungsi untuk menampilkan modal gambar
function showImageModal(card) {
    const img = card.querySelector('img');
    const caption = card.querySelector('.gallery-caption').innerHTML;
    
    document.getElementById('modalImage').src = img.src;
    document.getElementById('modalCaption').innerHTML = caption;
    
    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
    modal.show();
}

// Jalankan filter default saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    filterGallery('all');
});
</script>
@endsection