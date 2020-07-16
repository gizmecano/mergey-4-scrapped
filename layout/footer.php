<footer id="footer" class="w100 man">
  <?php
  for ($part = 1; $part <= 4; $part++) {
  ?>
    <section id="footer-part-<?php echo $part; ?>" class="fl w25 small-w100 tiny-w100 man pal">
      Section <?php echo $part; ?>
    </section>
  <?php
  }
  unset($part);
  ?>
</footer>
