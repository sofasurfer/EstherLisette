<?php snippet('header') ?>
<div class="container-light p-detail">
  <div class="container main" role="main">

    <div class="row">  
      <div class="col-md-12">
        <h1><?= $page->title(); ?></h1>
      </div>
    </div>
    <div class="row">
    
    <div class="col-md-12">
      
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      $right = false;
      $counter = 1;
      foreach($page->imglist()->toStructure() as $image): ?>
        <?php if( $image->location() == 'line' ): ?>
          <div class="p-line"></div>

        <?php elseif( $image->location() == 'text' ): ?>
            <div class="p-caption"><?= $image->title()->kirbytext(); ?></div>
        <?php else: ?>

          <figure id="figure-<?= $counter; ?>" class="img-<?= $image->location(); ?> <?= ($right) ? 'right' : 'left'; ?> ">
            <img src="<?= $image->image()->toFile()->url() ?>" class="img-thumbnail" alt="<?= $image->title(); ?>" />

            <?php if ( !$image->title()->empty() ): ?>
              <div class="p-caption"><?= $image->title()->kirbytext(); ?></div>
            <?php else: ?>
              <div class="p-caption"><p>&nbsp;</p></div>              
            <?php endif; ?>
            
          </figure>


          <?php
          if( $image->location() == 'half' && !$right ){
            $right = true;
          }else if( $image->location() == 'half' ){
            $right = false;
          }
          $counter++;
          ?>

        <?php endif; ?>
      <?php endforeach ?>
          
      <?php //snippet('prevnext') ?>

    </div>




  </div>
</div>

<?php snippet('footer') ?>