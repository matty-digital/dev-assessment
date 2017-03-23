<main>
  <div class="product-grid">
    <section class="hero">

    </section>
    <section class="items">
      <ul>
        <?php
          foreach($data as $d) {
            include 'list_item.php';
          }
        ?>
      </ul>
    </section>
  </div>
</main>
