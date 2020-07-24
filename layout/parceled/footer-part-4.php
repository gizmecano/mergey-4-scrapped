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
