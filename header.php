<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">Flora Shoppe</a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Shop
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <a class="dropdown-item" href="#">Faux Plants</a>
            <a class="dropdown-item" href="#">Live Plants</a>
            <a class="dropdown-item" href="#">Supplies</a>

          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        
      </ul>
    </div>
  </nav>