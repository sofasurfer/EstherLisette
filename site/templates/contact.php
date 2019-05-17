<?php snippet('header') ?>
<div class="container-dark">
  <div class="container main" role="main">
    <div class="row">  
      <div class="col-md-12">
        <h1><?= $page->title(); ?></h1>
      </div>
    </div>
    <div class="row">

      <div class="col-xl-8 col-lg-12 padding text-indent">
        <?= $page->content1()->kirbytext() ?>
      </div>

      <div class="col-xl-4 col-lg-12 small">
        <?= $page->content2()->kirbytext() ?>
      </div>

  </div>
</div>

<?php snippet('footer') ?>