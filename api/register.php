<?php include_once('header.php'); ?>

<div class="auth-page" style="padding-top:100px;">
  <div class="auth-card" style="max-width:600px;">
    <div class="auth-logo">
      <div class="brand"><em>e</em>dumato</div>
      <p>Create your account and join us</p>
    </div>
    <form action="registration.php" method="post">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
        <div class="auth-field">
          <label><i class="fas fa-user"></i> &nbsp;Full Name</label>
          <input type="text" name="name" placeholder="John Doe" required autofocus>
        </div>
        <div class="auth-field">
          <label><i class="fas fa-envelope"></i> &nbsp;Email</label>
          <input type="email" name="email" placeholder="you@example.com" required>
        </div>
      </div>
      <div class="auth-field">
        <label><i class="fas fa-lock"></i> &nbsp;Password</label>
        <input type="password" name="password" placeholder="••••••••" required maxlength="15">
        <div class="hint">Maximum 15 characters</div>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
        <div class="auth-field">
          <label><i class="fas fa-phone"></i> &nbsp;Phone Number</label>
          <input type="text" name="phone" placeholder="+91 98765 43210" required>
        </div>
        <div class="auth-field">
          <label><i class="fab fa-whatsapp"></i> &nbsp;WhatsApp Number</label>
          <input type="text" name="wtsphone" placeholder="+91 98765 43210" required>
        </div>
      </div>
      <div class="auth-field">
        <label>Gender</label>
        <div class="radio-group">
          <label><input type="radio" name="gender" value="Male" required> Male</label>
          <label><input type="radio" name="gender" value="Female"> Female</label>
          <label><input type="radio" name="gender" value="Other"> Other</label>
        </div>
      </div>
      <div class="auth-field">
        <label><i class="fas fa-map-marker-alt"></i> &nbsp;Address</label>
        <textarea name="address" rows="3" placeholder="Your full address..." style="width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:var(--text);padding:13px 16px;border-radius:10px;font-size:.93rem;font-family:var(--font-b);outline:none;resize:vertical;transition:border-color .3s,box-shadow .3s;" onfocus="this.style.borderColor='var(--gold)';this.style.boxShadow='0 0 0 3px rgba(212,175,55,.15)'" onblur="this.style.borderColor='rgba(255,255,255,.1)';this.style.boxShadow='none'"></textarea>
      </div>
      <button type="submit" name="enter" class="auth-submit">
        <i class="fas fa-user-plus"></i> &nbsp;Create Account
      </button>
    </form>
    <div class="auth-divider">or</div>
    <div class="auth-links">
      <p>Already have an account? <a href="login.php">Sign in</a></p>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>
