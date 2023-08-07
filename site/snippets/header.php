<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'de' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <link rel="icon" href="favicon.png">

  <?php if($page->isHomePage()): ?>
    <?php echo seo('title'); ?>
  <?php else: ?>
    <title><?= seo('title', array(), true); ?> | <?= $site->title()->html() ?></title>
  <?php endif; ?>
  <?php echo seo('description'); ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?= css('assets/css/index.css?v=9.4') ?>


</head>
<body class="<?= $page->intendedTemplate(); ?>">

<input type="checkbox" id="c-offcanvas">
<label for="c-offcanvas" id="c-offcanvas-trigger" class="c-offcanvas-trigger">
  <span></span>
  <span></span>
  <span></span>
</label>
<?php snippet('menu') ?>

<header class="main">
  <div class="" id="navbarHeader">
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <div class="col-md-6 col-lg-4">
            <a href="/" title="Home" class="logo" />
              <img id="logo-1" class="img-fluid logo-1" src="/assets/images/logo-blau.png" />
              <img id="logo-2" class="img-fluid logo-2" src="/assets/images/logo-white.png" />
            </a>
        </div>
      </div>
    </div>
  </div>
</header>
<main role="main">
