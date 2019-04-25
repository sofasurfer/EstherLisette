<?php snippet('header') ?>
<div class="container-dark">
  <div class="container main" role="main">

    <div class="row">

      <div class="col-md-8 padding">
        <?= $page->content1()->kirbytext() ?>
      </div>

      <div class="col-md-4 small">
        <?= $page->content2()->kirbytext() ?>
      </div>

  </div>
</div>

<?php snippet('footer') ?>