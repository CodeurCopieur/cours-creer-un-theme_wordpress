<?= get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="text-center col-md-8 mx-auto">
                  <ul class="breadcrumb bg-white justify-content-center">
                    <li class="breadcrumb-item"> <a href="#">Home</a> </li>
                    <li class="breadcrumb-item active">Link</li>
                    <li class="breadcrumb-item active">Link</li>
                  </ul>
                  <h1 class="mb-3"><?= the_title(); ?></h1>
                  <p class="lead mb-0">I am alone, and feel the charm of existence in this spot.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 p-0"> 
                  <img class="img-fluid d-block" src="<?= the_post_thumbnail_url(); ?>" width="1500">
                  <?= the_content() ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"> Cras justo odio </a>
                    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php endwhile; endif; ?>

<?= get_footer(); ?>