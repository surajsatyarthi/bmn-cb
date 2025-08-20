document.addEventListener('DOMContentLoaded', function() {
  const ham = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav-menu');
  if (ham && nav) {
    ham.addEventListener('click', function() {
      const expanded = ham.getAttribute('aria-expanded') === 'true';
      ham.setAttribute('aria-expanded', !expanded);
      nav.classList.toggle('active');
    });
  }
});