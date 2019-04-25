<?php if($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img class="img-fluid" src="<?= $image->url() ?>" alt="" />
  </figure>
<?php endif ?>
