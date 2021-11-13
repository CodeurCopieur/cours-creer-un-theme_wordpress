<?= get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4">
          <div class="card">
            <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;'])?>
            <div class="card-body">
              <h5 class="card-title"><?= the_title(); ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= the_category() ?></h6>
              <p class="card-text"><?= the_excerpt(); ?></p >
              <a href="<?= the_permalink() ?>" class="card-link">Voir Plus</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
    </div>

    <?= montheme_pagination(); ?>

<?php else : ?>
  <h1>Pas d'articles</h1>
<?php endif; ?>

<?= get_footer(); ?>