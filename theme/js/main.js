// Mobile nav toggle
const hamburger = document.querySelector('.hamburger');
const siteNav   = document.querySelector('.site-nav');

if (hamburger && siteNav) {
    hamburger.addEventListener('click', () => {
        siteNav.classList.toggle('open');
        hamburger.classList.toggle('active');
    });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Counter animation for stats
function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const duration = 1500;
    const step = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        el.textContent = Math.floor(current) + (el.dataset.suffix || '');
    }, 16);
}

// Intersection observer for counters and fade-ins
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (entry.target.classList.contains('stat-number')) {
                animateCounter(entry.target);
            }
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('.stat-number, .fade-in, .program-card, .value-card').forEach(el => {
    observer.observe(el);
});

// Form success message
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('sent') === '1') {
    const notice = document.createElement('div');
    notice.style.cssText = 'position:fixed;top:20px;right:20px;background:#4ab5c4;color:#fff;padding:16px 24px;border-radius:12px;font-weight:600;z-index:9999;box-shadow:0 8px 24px rgba(0,0,0,0.15);';
    notice.textContent = '✓ Message sent! We\'ll be in touch shortly.';
    document.body.appendChild(notice);
    setTimeout(() => notice.remove(), 5000);
}
