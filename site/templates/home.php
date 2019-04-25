<?php snippet('header') ?>

  <div class="container-fluid main" role="main">

    <div class="row grid">
      <?php $ic = 0; ?>
      <?php foreach($page->imglist()->toStructure() as $project): ?>

          <div class="col-sm-6 col-md-4 showcase-thumb">
              <a href="<?= $project->cta() ?>" title="<?= $project->title()->html() ?>" class="showcase-link">
                <?php if($image = $project->image()->toFile() ): $thumb = $image->crop(900, 900); ?>
                  <img src="<?= $image->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="img-thumbnail" />
                <?php endif ?>
                <div class="showcase-caption">
                  <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
                </div>
              </a>
          </div>

      <?php endforeach ?>

    </div>

  </div>

<?php snippet('footer') ?>