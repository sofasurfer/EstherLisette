<?php snippet('header') ?>

<?php

$first = true;
$isarchive = false;




?>

<div class="container-dark">
  <div class="container main" role="main">

    <div class="row">

      <div class="col-md-12">
        <h1><?= $page->title()->html() ?></h1>
      </div>

    </div>

    <?php if($articles->count() && strtotime($articles->first()->dateend()) < time() ): ?>
      <div class="row">
        <header class="col-lg-8 col-md-12">
          <?= $page->text()->kirbytext(); ?>
        </header>
      </div>
    <?php endif ?>

    <?php foreach($articles as $article): ?>
      <?php
        setlocale(LC_ALL, 'de_DE');
        if( $article->dateend() == "" ){
          $d1 = $article->date();
          $adate = date( "D d.m.Y", $d1);
        }else{
          $d1 = $article->date();
          $d2 = strtotime($article->dateend());
          if( $d1 != $d2 ){
            if( date( "m", $d1) != date( "m", $d2) ){
              $adate = date( "d.m.", $d1) . ' - ' . date( "d.m.Y", $d2);
            }else{
              $adate = date( "d.", $d1) . ' - ' . date( "d.m.Y", $d2);
            }
          }else{
            $adate = date( "D d.m.Y", $d1);
          }
        }
      ?>
      <?php if( strtotime($article->dateend()) < time() && !$isarchive): ?>
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

        <header class="col-lg-8 col-md-12 padding">
          <p class="article-date"><?= $adate ?></p>
          
          <h2 class="article-title">
            <?= $article->title()->html() ?>
          </h2>
          <div class="img-fullwidth hide-desktop">
            <?php snippet('coverimage', $article) ?>
            <div class="small-link"><?= $article->caption()->kirbytext() ?></div>
          </div>
          <?= $article->text()->kirbytext() ?>

        </header>


        <div class="col-md-4 text hide-mobile">
          <?php snippet('coverimage', $article) ?>
          <div class="small-link"><?= $article->caption()->kirbytext() ?></div>
        </div>

      </article>

    <?php endforeach ?>
  </div>
</div>

<?php snippet('footer') ?>