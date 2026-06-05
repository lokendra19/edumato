<?php include_once('header.php'); ?>

<div class="auth-page">
  <div class="auth-card">
    <div class="auth-logo">
      <div class="brand"><em>e</em>dumato</div>
      <p>Sign in to your account</p>
    </div>
    <?php
      if (isset($_POST['enter'])) {
        include_once('connection.php');
        $user = mysqli_real_escape_string($cn, $_POST['username']);
        $pass = mysqli_real_escape_string($cn, $_POST['password']);
        $q = mysqli_query($cn, "SELECT * FROM customer WHERE username='$user' AND password='$pass'");
        if (mysqli_num_rows($q) > 0) {
          echo '<div style="background:rgba(212,175,55,.15);border:1px solid var(--gold);color:var(--gold);padding:12px 16px;border-radius:10px;margin-bottom:20px;font-weight:600;"><i class="fas fa-check-circle"></i> Welcome back! Login successful.</div>';
        } else {
          echo '<div style="background:rgba(220,53,69,.1);border:1px solid rgba(220,53,69,.4);color:#ff6b7a;padding:12px 16px;border-radius:10px;margin-bottom:20px;font-weight:600;"><i class="fas fa-exclamation-circle"></i> Invalid email or password. Please try again.</div>';
        }
      }
    ?>
    <form action="login.php" method="post">
      <div class="auth-field">
        <label><i class="fas fa-envelope"></i> &nbsp;Email Address</label>
        <input type="email" name="username" placeholder="you@example.com" required>
      </div>
      <div class="auth-field">
        <label><i class="fas fa-lock"></i> &nbsp;Password</label>
        <input type="password" name="password" placeholder="••••••••" required>
        <div class="hint">Must be at least 8 characters</div>
      </div>
      <button type="submit" name="enter" class="auth-submit">
        <i class="fas fa-sign-in-alt"></i> &nbsp;Sign In
      </button>
    </form>
    <div class="auth-divider">or</div>
    <div class="auth-links">
      <p>New here? <a href="register.php">Create an account</a></p>
      <p style="margin-top:10px;"><a href="#">Forgot your password?</a></p>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>
