<?php $path = $_SERVER['DOCUMENT_ROOT'] . '/speech/idioms/' . $page['lang'] . '/'; ?>
<h3><?php echo ucfirst($glossary['site']['email']); ?></h3>
<?php echo mrg_text_full($path . $page['type'] . '-email.md', $page['lang']); ?>
<address itemscope itemtype="http://schema.org/Person">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/div-itemprop-contactpoint.php'; ?>
</address>
<h3><?php echo ucfirst($glossary['foot']['part-3']); ?></h3>
<?php
echo mrg_text_full($path . $page['type'] . '-networks.md', $page['lang']);
include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/ul-networks.php';
unset($path);
