<li>
  <div class="product-click-area">
    <div class="prod-image">
      <img src="<?= $d['images']['sm']; ?>" alt="Product Image">
    </div>
    <p class="prod-desc">
      <?= $d['brand'] . ' ' . $d['desc']; ?>
    </p>
    <p class="prod-price">
      <span class="currency">&#36;</span><?= $d['price']['retail']; ?>
    </p>
    <div class="hidden-price">
      <p>WAS: <s><span class="currency">&#36;</span><?= $d['price']['was']; ?></s></p>
      <p>NOW: <span class="currency">&#36;</span><?= $d['price']['retail']; ?></p>
    </div>

    <!-- Hide the first three bullets for the hero section since we already have the data -->
    <div id="details-<?= $i; ?>" class="reveal-modal">
      <ul class="hidden-bullets">
        <?php
          $hiddenBullets = array_slice($d['bullets'], 0, 3);
          foreach($hiddenBullets as $bullet) { ?>
          <li><?= $bullet; ?></li>
        <?php } ?>
      </ul>
      <a class="close-reveal-modal">&#215;</a>
    </div>
  </div>

  <a class="view-more" data-reveal-id="details-<?= $i; ?>">View More</a>
</li>
