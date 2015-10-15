<?php snippet('header') ?>

<ul class="project-list container">
  <h1>traces</h1>
  <?php foreach($pages->find('traces')->children() as $subpage): ?>
  <li class="col-sm-4 trace">
      <h2><?php echo kirbytext($subpage->titre()) ?></h2>
      <p><?php echo kirbytext($subpage->description()) ?></p>

      <?php foreach($subpage->images() as $image): ?>
      <figure>
        <a href="<?php echo $image->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="">
        </a>
      </figure>
      <?php endforeach ?>
      <p><?php echo kirbytext($subpage->reference()) ?></p>

      <hr>
  </li>
  <?php endforeach ?>
</ul>
