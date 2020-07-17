<footer id="footer" class="w100 man">
  <?php
  for ($part = 1; $part <= 4; $part++) {
  ?>
    <section id="footer-part-<?php echo $part; ?>" class="fl w25 small-w100 tiny-w100 man pal">
      <h3>Section &#8470;<?php echo $part; ?></h3>
    </section>
  <?php
  }
  unset($part);
  ?>
</footer>
