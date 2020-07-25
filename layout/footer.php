<footer id="footer" class="w100 man">
  <h2 class="visually-hidden"><?php echo ucfirst($glossary['foot']['hidden']); ?></h2>
  <?php
  for ($part = 1; $part <= 4; $part++) {
  ?>
    <section id="footer-part-<?php echo $part; ?>" class="fl w25 small-w100 tiny-w100 man pal">
      <h3><?php echo ucfirst($glossary['foot']['part-' . $part]); ?></h3>
      <?php include_once('parceled/footer-part-' . $part . '.php'); ?>
    </section>
  <?php
  }
  unset($part);
  ?>
</footer>
