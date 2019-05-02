<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="row grid">
  <?php foreach($projects as $project): ?>
    <?php if(  $project->feautured() == 'active' ): ?>
      <div class="col-sm-6 col-md-4 showcase-thumb">
          <a href="<?= $project->url() ?>" title="<?= $project->title()->html() ?>" class="showcase-link">
            <?php if($image = $project->thumbnail()->toFile() ): $thumb = $image->crop(900, 900); ?>
              <img src="<?= $image->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="img-thumbnail" />
            <?php endif ?>
            <div class="showcase-caption">
            </div>
          </a>
      </div>
    <?php endif; ?>
  <?php endforeach ?>
</div>