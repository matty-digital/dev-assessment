<li>
  <div class="prod-image">
    <img src="<?= $d['images']['sm']; ?>" alt="Product Image">
  </div>
  <p class="prod-desc">
    <?= $d['brand'] . $d['desc']; ?>
  </p>
  <p class="prod-price">
    <span class="currency">$</span><?= $d['price']['retail']; ?>
  </p>
  <button class="view-more">View More</button>
</li>
