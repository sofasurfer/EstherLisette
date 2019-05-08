<nav class="navigation column" role="navigation">
    <div class="menu">
      <ul class="menu-list">
        <?php foreach($pages->visible() as $item): ?>
        <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
</nav>