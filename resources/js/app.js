import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// ===== Animasi Fade-In Bounce Saat Scroll =====
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".feature-item");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-fadeInBounce");
        entry.target.style.animationDelay = `${index * 150}ms`;
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  items.forEach(item => observer.observe(item));
});
