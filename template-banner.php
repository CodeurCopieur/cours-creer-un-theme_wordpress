<?php
/**
 * Template Name: Page Banner
 * Template Post Type: page, post
 */
?>

<?= get_header(); ?>

  <h1><?php the_title(); ?>(Template Page Banner)</h1>

  <div class="row">

    <div class="col-lg-6">
       autre contenu
    </div>
    <div class="col-lg-6">

      <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
      <?php if( have_posts() ): while( have_posts() ): the_post();  ?>

      <?php the_content(); ?>

      <?php endwhile; else: endif; ?>
    </div>

<?= get_footer(); ?>