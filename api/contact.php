<?php include_once('header.php'); ?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1920&q=80')"></div>
  <div class="page-hero-content">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you</p>
  </div>
</section>

<section class="contact-section">
  <div style="text-align:center;" data-aos="fade-up">
    <span class="section-label">Get in Touch</span>
    <h2 class="section-title">Let's <span>Talk</span></h2>
    <div class="gold-divider center"></div>
  </div>
  <div class="contact-inner">
    <div data-aos="fade-right">
      <h3>Visit Us or Drop a Line</h3>
      <p>Whether you have a question about reservations, our menu, or just want to say hello — our team is ready to help.</p>
      <div class="contact-detail">
        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
        <div class="contact-detail-text">
          <h5>Address</h5>
          <p>80 Feet Rd, Gopal Pura Mode, Jaipur, Rajasthan 302018</p>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-icon"><i class="fas fa-phone"></i></div>
        <div class="contact-detail-text">
          <h5>Phone</h5>
          <p>+91 1234 567 890</p>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
        <div class="contact-detail-text">
          <h5>Email</h5>
          <p>edumato@gmail.com</p>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-icon"><i class="fas fa-clock"></i></div>
        <div class="contact-detail-text">
          <h5>Opening Hours</h5>
          <p>Every Day &nbsp;|&nbsp; 10:00 AM – 10:00 PM</p>
        </div>
      </div>
    </div>
    <div class="contact-form-card" data-aos="fade-left">
      <?php
        if (isset($_POST['send'])) {
          include_once('connection.php');
          $name    = mysqli_real_escape_string($cn, $_POST['name']);
          $email   = mysqli_real_escape_string($cn, $_POST['email']);
          $phone   = mysqli_real_escape_string($cn, $_POST['phone']);
          $message = mysqli_real_escape_string($cn, $_POST['message']);
          $q = "INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
          if (mysqli_query($cn, $q)) {
            echo '<div style="background:rgba(212,175,55,.15);border:1px solid var(--gold);color:var(--gold);padding:14px 18px;border-radius:10px;margin-bottom:20px;font-weight:600;"><i class="fas fa-check-circle"></i> Message sent! We\'ll get back to you soon.</div>';
          }
        }
      ?>
      <h3 style="font-family:var(--font-d);font-size:1.5rem;color:#fff;margin-bottom:24px;">Send a Message</h3>
      <form action="contact.php" method="post">
        <div class="form-field">
          <label>Your Name</label>
          <input type="text" name="name" placeholder="John Doe" required>
        </div>
        <div class="form-field">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="john@example.com" required>
        </div>
        <div class="form-field">
          <label>Phone Number</label>
          <input type="text" name="phone" placeholder="+91 98765 43210" required maxlength="10">
        </div>
        <div class="form-field">
          <label>Message</label>
          <textarea name="message" rows="5" placeholder="Tell us how we can help..." required></textarea>
        </div>
        <button type="submit" name="send" class="contact-submit">
          <i class="fas fa-paper-plane"></i> &nbsp;Send Message
        </button>
      </form>
    </div>
  </div>
</section>

<?php include_once('footer.php'); ?>
