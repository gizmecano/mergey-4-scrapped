<h3><?php echo ucfirst($glossary['site']['owner']); ?></h3>
<address itemscope itemtype="http://schema.org/Person">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/div-itemprop-name.php'; ?>
  <p itemprop="jobTitle">
    <em><?php echo ucfirst($glossary['site']['motto']); ?></em>
  </p>
  <hr />
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/div-itemprop-address.php'; ?>
  <hr />
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/reusable/div-itemprop-contactpoint.php'; ?>
</address>
