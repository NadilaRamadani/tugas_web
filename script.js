// JavaScript untuk Website Ramadhan
// Versi Lengkap - Tidak Error

document.addEventListener('DOMContentLoaded', function() {
    
    // ========== 1. SMOOTH SCROLL ==========
    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    smoothScrollLinks.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#' && targetId !== '#') {
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ========== 2. IMAGE LOADING ANIMATION ==========
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        // Skip jika gambar sudah memiliki style
        if (!img.style.opacity) {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.5s ease';
        }
        
        if (img.complete) {
            img.style.opacity = '1';
        } else {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
        }
        
        // Error handling untuk gambar yang gagal load
        img.addEventListener('error', function() {
            this.style.opacity = '1';
            this.src = 'https://via.placeholder.com/400x300/2E7D32/FFFFFF?text=Image+Not+Found';
        });
    });

    // ========== 3. FORM SUBMISSION HANDLER ==========
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name')?.value;
            const email = document.getElementById('email')?.value;
            const message = document.getElementById('message')?.value;
            
            if (name && email && message) {
                // Tampilkan alert sukses
                alert(`Terima kasih ${name}! Pesan Anda telah terkirim.\n\nDetail Pesan:\nEmail: ${email}\nPesan: ${message}`);
                this.reset();
            } else {
                alert('Harap lengkapi semua field yang diperlukan (Nama, Email, dan Pesan).');
            }
        });
    }

    // ========== 4. GALLERY IMAGE MODAL (Preview Foto) ==========
    const galleryImages = document.querySelectorAll('.gallery-card img');
    galleryImages.forEach(img => {
        img.addEventListener('click', function() {
            // Cari caption
            let caption = '';
            const parentCard = this.closest('.gallery-card');
            if (parentCard) {
                const captionElement = parentCard.querySelector('.gallery-caption p');
                if (captionElement) {
                    caption = captionElement.textContent;
                }
            }
            
            // Buat modal HTML
            const modalId = 'imageModal_' + Date.now();
            const modalHtml = `
                <div class="modal fade" id="${modalId}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #2E7D32; color: white;">
                                <h5 class="modal-title"><i class="fas fa-image me-2"></i>Preview Foto</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="${this.src}" class="img-fluid rounded" alt="Preview" style="max-height: 70vh;">
                                ${caption ? `<p class="mt-3 text-muted"><i class="fas fa-camera me-2"></i>${caption}</p>` : ''}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            // Hapus modal lama jika ada
            const existingModal = document.querySelector('.modal.show');
            if (existingModal) {
                const bsModal = bootstrap.Modal.getInstance(existingModal);
                if (bsModal) bsModal.hide();
            }
            
            // Tambahkan modal ke body
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            
            // Tampilkan modal
            const modalElement = document.getElementById(modalId);
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
            
            // Hapus modal setelah ditutup
            modalElement.addEventListener('hidden.bs.modal', function() {
                this.remove();
            });
        });
    });

    // ========== 5. ANIMATION ON SCROLL (Tanpa AOS) ==========
    const animatedElements = document.querySelectorAll('.feature-card, .story-card, .gallery-card, .video-card');
    
    // Set initial styles
    animatedElements.forEach(el => {
        if (!el.style.opacity) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        }
    });
    
    function checkScrollAnimation() {
        animatedElements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight;
            
            if (elementPosition < screenPosition - 50) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Jalankan saat scroll dan load
    window.addEventListener('scroll', checkScrollAnimation);
    window.addEventListener('load', checkScrollAnimation);
    checkScrollAnimation(); // Jalankan sekali

    // ========== 6. BACK TO TOP BUTTON ==========
    const backToTop = document.createElement('button');
    backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
    backToTop.className = 'btn btn-success rounded-circle position-fixed';
    backToTop.style.cssText = `
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        display: none;
        z-index: 1000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        border: none;
        transition: all 0.3s ease;
    `;
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    backToTop.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px)';
        this.style.boxShadow = '0 6px 16px rgba(0,0,0,0.2)';
    });
    
    backToTop.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
    });
    
    document.body.appendChild(backToTop);
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });

    // ========== 7. VIDEO MODAL HANDLER ==========
    const videoButtons = document.querySelectorAll('[data-bs-target^="#videoModal"]');
    videoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-bs-target');
            const modalElement = document.querySelector(targetId);
            if (modalElement) {
                // Cari iframe di dalam modal dan set source jika diperlukan
                const iframe = modalElement.querySelector('iframe');
                if (iframe && !iframe.getAttribute('data-src')) {
                    const videoSrc = iframe.getAttribute('data-src') || iframe.src;
                    iframe.setAttribute('data-src', videoSrc);
                }
            }
        });
    });
    
    // Reset video saat modal ditutup
    const videoModals = document.querySelectorAll('[id^="videoModal"]');
    videoModals.forEach(modal => {
        modal.addEventListener('hidden.bs.modal', function() {
            const iframe = this.querySelector('iframe');
            if (iframe && iframe.getAttribute('data-src')) {
                iframe.src = iframe.getAttribute('data-src');
            }
        });
    });

    // ========== 8. COUNTDOWN TIMER (jika ada) ==========
    function updateCountdown() {
        const daysElement = document.getElementById('days');
        const hoursElement = document.getElementById('hours');
        const minutesElement = document.getElementById('minutes');
        const secondsElement = document.getElementById('seconds');
        
        if (daysElement && hoursElement && minutesElement && secondsElement) {
            // Set target date (Idul Fitri - sesuaikan)
            const targetDate = new Date('March 31, 2024 00:00:00').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;
            
            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                daysElement.textContent = days;
                hoursElement.textContent = hours;
                minutesElement.textContent = minutes;
                secondsElement.textContent = seconds;
            } else {
                daysElement.textContent = '0';
                hoursElement.textContent = '0';
                minutesElement.textContent = '0';
                secondsElement.textContent = '0';
            }
        }
    }
    
    // Jalankan countdown jika ada elemennya
    if (document.getElementById('days')) {
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    // ========== 9. UPDATE FOOTER YEAR ==========
    const currentYear = new Date().getFullYear();
    const footerTextElements = document.querySelectorAll('footer small, .footer-year');
    footerTextElements.forEach(el => {
        if (el.innerHTML) {
            el.innerHTML = el.innerHTML.replace(/2024/g, currentYear);
        }
    });

    // ========== 10. NAVBAR ACTIVE STATE ON SCROLL ==========
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    function updateActiveNavLink() {
        let current = '';
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href.includes(current)) {
                link.classList.add('active');
            }
        });
    }
    
    if (sections.length > 0) {
        window.addEventListener('scroll', updateActiveNavLink);
        updateActiveNavLink();
    }

    // ========== 11. TOOLTIP INITIALIZATION (Bootstrap) ==========
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // ========== 12. PREVENT DOUBLE SUBMIT ==========
    const submitButtons = document.querySelectorAll('button[type="submit"]');
    submitButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            if (form && form.classList.contains('submitted')) {
                e.preventDefault();
                return false;
            }
            if (form) {
                form.classList.add('submitted');
                setTimeout(() => {
                    form.classList.remove('submitted');
                }, 3000);
            }
        });
    });

    console.log('✅ Website Ramadhan loaded successfully!');
});