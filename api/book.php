<?php include_once('header.php'); ?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1920&q=80')"></div>
  <div class="page-hero-content">
    <h1>Book a Table</h1>
    <p>Reserve your perfect dining experience</p>
  </div>
</section>

<section class="book-section" style="padding:80px 5vw 100px;">
  <div class="book-inner">
    <div data-aos="fade-right">
      <span class="section-label">Reservations</span>
      <h2 class="section-title">Your Table <span>Awaits</span></h2>
      <div class="gold-divider"></div>
      <p style="color:var(--muted);line-height:1.9;margin-bottom:36px;font-size:.96rem;">
        We'd be honoured to host you. Whether it's a romantic evening for two, a family celebration, or a business dinner — we'll make sure every detail is perfect. Fill in the form and we'll confirm your reservation shortly.
      </p>
      <div style="display:flex;flex-direction:column;gap:18px;margin-bottom:36px;">
        <div style="display:flex;gap:14px;align-items:flex-start;">
          <div style="width:44px;height:44px;flex-shrink:0;background:rgba(212,175,55,.1);border:1px solid rgba(212,175,55,.25);border-radius:12px;display:flex;align-items:center;justify-content:center;color:var(--gold);">
            <i class="fas fa-clock"></i>
          </div>
          <div>
            <div style="font-weight:600;color:#fff;margin-bottom:3px;">Opening Hours</div>
            <div style="color:var(--muted);font-size:.88rem;">Every day, 10:00 AM – 10:00 PM</div>
          </div>
        </div>
        <div style="display:flex;gap:14px;align-items:flex-start;">
          <div style="width:44px;height:44px;flex-shrink:0;background:rgba(212,175,55,.1);border:1px solid rgba(212,175,55,.25);border-radius:12px;display:flex;align-items:center;justify-content:center;color:var(--gold);">
            <i class="fas fa-phone"></i>
          </div>
          <div>
            <div style="font-weight:600;color:#fff;margin-bottom:3px;">Call Us Directly</div>
            <div style="color:var(--muted);font-size:.88rem;">+91 1234 567 890</div>
          </div>
        </div>
        <div style="display:flex;gap:14px;align-items:flex-start;">
          <div style="width:44px;height:44px;flex-shrink:0;background:rgba(212,175,55,.1);border:1px solid rgba(212,175,55,.25);border-radius:12px;display:flex;align-items:center;justify-content:center;color:var(--gold);">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div>
            <div style="font-weight:600;color:#fff;margin-bottom:3px;">Our Location</div>
            <div style="color:var(--muted);font-size:.88rem;">80 Feet Rd, Gopal Pura Mode, Jaipur, Rajasthan</div>
          </div>
        </div>
      </div>
      <div class="map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.799621818353!2d75.77077951496943!3d26.878106683142537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db44e3a531b95%3A0x8c70bc5245f3c708!2s1%2C%2080%20Feet%20Rd%2C%20Jaipur%2C%20Rajasthan%20302018!5e0!3m2!1sen!2sin!4v1680853011617!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="book-form-wrap" data-aos="fade-left">
      <h3 style="font-family:var(--font-d);font-size:1.6rem;color:#fff;margin-bottom:8px;">Make a Reservation</h3>
      <p style="color:var(--muted);font-size:.85rem;margin-bottom:28px;">Fields marked * are required</p>
      <?php
        include_once('connection.php');
        if (isset($_POST['enter'])) {
          $name   = mysqli_real_escape_string($cn, $_POST['name']);
          $phone  = mysqli_real_escape_string($cn, $_POST['phone']);
          $email  = mysqli_real_escape_string($cn, $_POST['email']);
          $person = mysqli_real_escape_string($cn, $_POST['person']);
          $date   = mysqli_real_escape_string($cn, $_POST['date']);
          $q = "INSERT INTO booking(name,phone,email,persons,date) VALUES('$name','$phone','$email','$person','$date')";
          if (mysqli_query($cn, $q)) {
            echo '<div style="background:rgba(212,175,55,.15);border:1px solid var(--gold);color:var(--gold);padding:16px 20px;border-radius:12px;margin-bottom:24px;font-weight:600;font-size:.95rem;"><i class="fas fa-check-circle"></i> &nbsp;Your table is booked! We\'ll confirm shortly via email.</div>';
          } else {
            echo '<div style="background:rgba(220,53,69,.1);border:1px solid rgba(220,53,69,.4);color:#ff6b7a;padding:16px 20px;border-radius:12px;margin-bottom:24px;font-weight:600;"><i class="fas fa-exclamation-circle"></i> &nbsp;Something went wrong. Please try again.</div>';
          }
        }
      ?>
      <form method="post" autocomplete="off">
        <div class="form-row">
          <div class="form-field">
            <label>Your Name *</label>
            <input type="text" name="name" placeholder="John Doe" required>
          </div>
          <div class="form-field">
            <label>Phone Number *</label>
            <input type="text" name="phone" placeholder="+91 98765 43210" required maxlength="10">
          </div>
        </div>
        <div class="form-field">
          <label>Email Address *</label>
          <input type="email" name="email" placeholder="john@example.com" required>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label>Number of Guests *</label>
            <input type="number" name="person" placeholder="2" required min="1" max="50">
          </div>
          <div class="form-field">
            <label>Preferred Date *</label>
            <input type="date" name="date" required>
          </div>
        </div>
        <button type="submit" name="enter" class="gold-btn" style="width:100%;justify-content:center;padding:16px;font-size:1rem;margin-top:6px;">
          <i class="fas fa-calendar-check"></i> &nbsp;Confirm Reservation
        </button>
      </form>
    </div>
  </div>
</section>

<?php include_once('footer.php'); ?>
