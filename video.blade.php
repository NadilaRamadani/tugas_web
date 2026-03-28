@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="text-center mb-5">
    <h1 class="display-4 fw-bold text-success">Video Lebaran</h1>
    <p class="lead">Dokumentasi momen indah dalam video</p>
</div>

<div class="row g-4">
    @foreach($videos as $video)
    <div class="col-md-4 col-sm-6">
        <div class="video-card" onclick="showVideoModal('{{ $video['title'] }}')">
            <div class="position-relative">
                <img src="https://via.placeholder.com/400x250/2E7D32/FFFFFF?text={{ urlencode($video['title']) }}" 
                     class="img-fluid rounded shadow w-100" 
                     alt="{{ $video['title'] }}"
                     style="height: 200px; object-fit: cover;">
                <div class="video-duration">{{ $video['duration'] }}</div>
                <div class="play-overlay">
                    <i class="fas fa-play-circle"></i>
                </div>
            </div>
            <div class="video-title mt-2 text-center p-2">
                <h6 class="mb-0">{{ $video['title'] }}</h6>
                <small class="text-muted">{{ $video['duration'] }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background: #2E7D32; color: white;">
                <h5 class="modal-title" id="videoModalTitle">
                    <i class="fas fa-video me-2"></i>Putar Video
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe id="videoIframe" 
                            src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=0" 
                            title="Video Player" 
                            frameborder="0" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<style>
.video-card {
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.video-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.video-card .position-relative {
    overflow: hidden;
}

.video-card img {
    transition: transform 0.5s ease;
}

.video-card:hover img {
    transform: scale(1.05);
}

.video-duration {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 3px 8px;
    border-radius: 5px;
    font-size: 12px;
}

.play-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.play-overlay i {
    font-size: 50px;
    color: white;
}

.video-card:hover .play-overlay {
    opacity: 1;
}

.video-title {
    background: white;
}
</style>

<script>
function showVideoModal(title) {
    document.getElementById('videoModalTitle').innerHTML = '<i class="fas fa-video me-2"></i>' + title;
    const modal = new bootstrap.Modal(document.getElementById('videoModal'));
    modal.show();
}

document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
    document.getElementById('videoIframe').src = 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=0';
});
</script>
@endsection