<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4">
    <div class="container"> 
      <a class="navbar-brand text-white" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b><?= bloginfo('name') ?></b>
      </a> 
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbar4">
        <?= wp_nav_menu([
          'theme_location' => 'header', 
          'container' => false,
          'menu_class' => 'navbar-nav ml-auto'
          ]); ?>
        <!--
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">FAQ</a> </li>
          </ul> 
          <a class="btn navbar-btn ml-md-2 btn-light">Contact us</a>
        
        
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
      </form>-->
      <!-- formulaire : searchform.php -->
      <?= get_search_form() ?>
      </div>
    </div>
  </nav>
  <div class="container">

  
