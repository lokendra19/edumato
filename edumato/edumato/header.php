<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edumato — Fine Dining Experience</title>
  <link rel="icon" href="images/e png.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Inter:wght@300;400;500;600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/contact.css">
  <script src="js/jquery.js"></script>
</head>
<body>

<nav class="main-nav" id="mainNav">
  <div class="nav-inner">
    <a class="nav-brand" href="home.php"><em>e</em>dumato</a>
    <button class="burger" id="burger" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-menu" id="navMenu">
      <?php
        $p = basename($_SERVER['PHP_SELF']);
        $links = [
          'Home'       => 'home.php',
          'About'      => 'about.php',
          'Menu'       => 'menu.php',
          'Gallery'    => 'gallery.php',
          'Book Table' => 'book.php',
          'Blog'       => 'blog.php',
          'Contact'    => 'contact.php',
        ];
        foreach ($links as $label => $href):
          $active = ($p === $href || ($href === 'home.php' && $p === 'index.php')) ? 'active' : '';
      ?>
      <li><a href="<?= $href ?>" class="<?= $active ?>"><?= $label ?></a></li>
      <?php endforeach; ?>
      <li><a href="login.php" class="nav-btn <?= $p === 'login.php' ? 'active' : '' ?>">
        <i class="fas fa-user-circle"></i> Login
      </a></li>
    </ul>
  </div>
</nav>

<script>
  // Navbar scroll effect
  window.addEventListener('scroll', () => {
    document.getElementById('mainNav').classList.toggle('scrolled', window.scrollY > 40);
  });
  // Mobile menu
  document.getElementById('burger').addEventListener('click', () => {
    document.getElementById('navMenu').classList.toggle('open');
  });
</script>
