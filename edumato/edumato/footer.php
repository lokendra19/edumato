<footer class="site-footer">
  <div class="footer-grid">
    <div>
      <div class="footer-brand"><em>e</em>dumato</div>
      <p class="footer-desc">A curated dining experience bringing the finest flavours to your table. Crafted with passion, served with love.</p>
      <div class="social-links">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="menu.php">Our Menu</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="book.php">Book a Table</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>
    <div class="footer-col footer-info">
      <h4>Contact Us</h4>
      <p><i class="fas fa-map-marker-alt"></i> 80 Feet Rd, Gopal Pura Mode, Jaipur, Rajasthan</p>
      <p><i class="fas fa-phone"></i> +91 1234 567 890</p>
      <p><i class="fas fa-envelope"></i> edumato@gmail.com</p>
      <p><i class="fas fa-clock"></i> Everyday 10:00 AM – 10:00 PM</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 <span>Edumato</span>. All rights reserved.</p>
    <p>Made with <span>&#9829;</span> for food lovers</p>
  </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 700, easing: 'ease-out-cubic', once: true, offset: 60 });

  // Animated counters
  function animateCounter(el) {
    const target = parseInt(el.dataset.target);
    const dur = 1800;
    const step = target / (dur / 16);
    let cur = 0;
    const timer = setInterval(() => {
      cur += step;
      if (cur >= target) { el.textContent = target + (el.dataset.suffix || ''); clearInterval(timer); }
      else el.textContent = Math.floor(cur) + (el.dataset.suffix || '');
    }, 16);
  }
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { animateCounter(e.target); io.unobserve(e.target); } });
  }, { threshold: .5 });
  document.querySelectorAll('[data-target]').forEach(el => io.observe(el));
</script>
</body>
</html>
