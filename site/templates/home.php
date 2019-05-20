<?php snippet('header') ?>
<?php $ic = 0; ?>
  <div class="container-fluid main" role="main">

    <div class="row grid">
      <?php $ic = 0; ?>
      <?php foreach($page->imglist()->toStructure() as $project): ?>

          <div class="col-sm-6 col-md-4 showcase-thumb">
              <a href="<?= $project->cta() ?>" class="showcase-link hover">
                <?php if($image = $project->image()->toFile() ): $thumb = $image->crop(900, 900); ?>
                  <img src="<?= $image->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="img-thumbnail" />
                <?php endif ?>
              </a>
          </div>

          <?php if( $ic == 1 ): ?>
            <div class="col-sm-6 col-md-4 showcase-thumb hide-mobile">
              <a href="/kontakt" class="showcase-link">
                <img src="/assets/images/adresse-blau.png" alt="Esther Lisette" class="img-thumbnail" />
              </a>
            </div>
          <?php elseif( $ic == 0 ): ?>
            <div class="col-sm-6 col-md-4 showcase-thumb hide-desktop">
              <a href="/kontakt" class="showcase-link">
                <img src="/assets/images/adresse-blau.png" alt="Esther Lisette" class="img-thumbnail" />
              </a>
            </div>
          <?php endif; ?>
          <?php $ic++; ?>
      <?php endforeach ?>

    </div>

  </div>

<?php snippet('footer') ?>