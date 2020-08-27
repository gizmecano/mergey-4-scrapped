<address itemscope itemtype="http://schema.org/Person">
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/div-itemprop-name.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/div-itemprop-address.php';
  ?>
</address>

<ul>
  <li><a href="/contact"><?php echo ucfirst($glossary['page']['proof']['contact']); ?></a></li>
  <li><a href="/imprint"><?php echo ucfirst($glossary['page']['proof']['imprint']); ?></a></li>
</ul>

<ul class="u-small">
  <li>2010&#8211;<?php echo date('Y'); ?></li>
  <li><a href="<?php echo $composer['homepage']; ?>"><?php echo ucfirst($glossary['host']['source']); ?></a></li>
</ul>
