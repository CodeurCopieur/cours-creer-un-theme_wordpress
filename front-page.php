<?= get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <h1><?= the_title() ?></h1>

      <a href="<?= get_post_type_archive_link('post') ?>">Voir les actus</a>
  <?php endwhile; endif; ?>

<?= get_footer(); ?>