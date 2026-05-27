// ========================================
// LIGHTBOX
// ========================================

let lbImages = [];
let lbIndex = 0;

function initLightbox(images) {
    lbImages = images;
}

function openLightbox(index) {
    lbIndex = index;
    updateLightbox();
    document.getElementById('lightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
    document.body.style.overflow = '';
}

function closeLightboxOnBackdrop(e) {
    if (e.target === document.getElementById('lightbox')) {
        closeLightbox();
    }
}

function changeImage(direction) {
    lbIndex = (lbIndex + direction + lbImages.length) % lbImages.length;
    updateLightbox();
}

function updateLightbox() {
    document.getElementById('lb-img').src = lbImages[lbIndex];
    document.getElementById('lb-counter').textContent =
        lbImages.length > 1 ? (lbIndex + 1) + ' / ' + lbImages.length : '';

    const hide = lbImages.length <= 1;
    document.querySelector('.lb-prev').classList.toggle('hidden', hide);
    document.querySelector('.lb-next').classList.toggle('hidden', hide);
}

document.addEventListener('keydown', (e) => {
    if (!document.getElementById('lightbox').classList.contains('active')) return;
    if (e.key === 'ArrowLeft')  changeImage(-1);
    if (e.key === 'ArrowRight') changeImage(1);
    if (e.key === 'Escape')     closeLightbox();
});