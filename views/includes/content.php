<main>
  <div class="product-grid">
    <section class="hero">
      <?php include 'hero.php'; ?>
    </section>
    <section class="items">
      <ul>
        <?php
          $i = 0;
          foreach($data as $d) {
            $i++;
            //Were we to maintain this, having each item on its own makes things a lot easier
            include 'list_item.php';
          }
        ?>
      </ul>
    </section>
  </div>
</main>
