<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site_logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#">ACCUEIL</a></li>
            <li><a href="#">À PROPOS</a></li>
            <li><a href="contactform.html">CONTACT</a></li>
        </ul>
        <div class="menu-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_icon.png" alt="Menu">
        </div>
    </nav>
    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site_logo.png" alt="Logo">
            </div>
            <div class="close-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/closemenu_icon.png" alt="Close" class="closeX">
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="#">ACCUEIL</a></li>
            <li><a href="#">À PROPOS</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </div>
  </header>
  <main>