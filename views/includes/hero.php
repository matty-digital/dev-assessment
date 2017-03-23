<!-- default to the first product -->
<?php
  $hero = $data[0];
  $bulletSlice = array_slice($hero['bullets'], 0, 3);
?>

<div class="hero-img">
  <div class="img-holder">
    <img src="<?= $hero['images']['md']; ?>" alt="Hero Product Image">
  </div>
</div>
<div class="hero-desc">
  <p>
    <?= $hero['brand'] . ' ' . $hero['desc']; ?>
  </p>
  <ul class="marketing-bullets">
    <?php foreach($bulletSlice as $bullet) { ?>
      <li><?= $bullet; ?></li>
    <?php } ?>
  </ul>
</div>
<div class="hero-price">
  <a class="atc-btn" data-reveal-id="atc-1">Add To Cart</a>
  <p class="hero-prod-price">
    <span class="currency">&#36;</span><?= $hero['price']['retail']; ?>
  </p>

  <div id="atc-1" class="reveal-modal price-modal">
    <div class="sale-price-holder">
      <p>WAS: <s><span class="currency">&#36;</span><?= $hero['price']['was']; ?></s></p>
      <p>NOW: <span class="currency">&#36;</span><?= $hero['price']['retail']; ?></p>
    </div>
    <a class="close-reveal-modal">&#215;</a>
  </div>
</div>
