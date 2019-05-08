<?php snippet('header') ?>

<?php
$isarchive = false;




?>

<div class="container-dark">
  <div class="container main" role="main">

    <div class="row">

      <div class="col-md-12">
        <h1><?= $page->title()->html() ?></h1>
      </div>

    </div>

    <?php if($articles->count()): ?>
      <?php foreach($articles as $article): ?>
        <?php
          $d1 = $article->date();
          $d2 = strtotime($article->dateend());
          if( $d1 != $d2 ){
            if( date( "m", $d1) != date( "m", $d2) ){
              $adate = date( "d.m.", $d1) . ' - ' . date( "d.m.Y", $d2);
            }else{
              $adate = date( "d.", $d1) . ' - ' . date( "d.m.Y", $d2);
            }
          }else{
            $adate = date( "d.m.Y", $d1);
          }
        ?>
        <?php if( $article->date() < time() && !$isarchive): ?>
        <div class="row">
          <header class="col-md-8">
            <h2>Archiv</h2>
          </header>
        </div>
        <?php $isarchive = true; ?>
        <?php endif; ?>
        <div class="row">
          <div class="col-md-12">
            <hr class="article" />
          </div>
        </div>
        <article class="row">

          <header class="col-md-8 padding">
            <p class="article-date"><?= $adate ?></p>
            
            <h2 class="article-title">
              <?= $article->title()->html() ?>
            </h2>

            <?= $article->text()->kirbytext() ?>

          </header>


          <div class="col-md-4 text">
            <?php snippet('coverimage', $article) ?>
          </div>

        </article>

      <?php endforeach ?>
    <?php else: ?>
      <p>This blog does not contain any articles yet.</p>
    <?php endif ?>


  </div>
</div>

<?php snippet('footer') ?>