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

<address class="w50 small-w100 tiny-w100 fl" itemscope itemtype="http://schema.org/Organization">
  <h3 itemprop="potentialAction"><?php echo ucfirst($glossary['host']['server']); ?></h3>
  <div itemprop="name">
    <p><a itemprop="url" href="<?php echo $masthead['ha']['iu']; ?>"><?php echo $masthead['ha']['ln']; ?></a></p>
  </div>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <p><span itemprop="streetAddress"><?php echo $masthead['ha']['sa']; ?></span></p>
    <p>
      <span itemprop="postalCode"><?php echo $masthead['ha']['pc']; ?></span>
      <span itemprop="addressLocality"><?php echo $masthead['ha']['al']; ?></span>
    </p>
    <p>(<span itemprop="addressCountry"><?php echo $glossary['code']['iso-1'][$masthead['ha']['ac']]; ?></span>)</p>
  </div>
</address>

<address class="w50 small-w100 tiny-w100 fr" itemscope itemtype="http://schema.org/Organization">
  <h3 itemprop="potentialAction"><?php echo ucfirst($glossary['host']['source']); ?></h3>
  <div itemprop="name">
    <p><a itemprop="url" href="https://github.com/"><?php echo $masthead['sa']['ln']; ?></a></p>
  </div>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <p><span itemprop="streetAddress"><?php echo $masthead['sa']['sa']; ?></span></p>
    <p>
      <span itemprop="postalCode"><?php echo $masthead['sa']['pc']; ?></span>
      <span itemprop="addressLocality"><?php echo $masthead['sa']['al']; ?></span>
    </p>
    <p>
      <span itemprop="addressRegion"><?php echo $glossary['code']['iso-2'][$masthead['sa']['ar']]; ?></span>
      (<span itemprop="addressCountry"><?php echo $glossary['code']['iso-1'][$masthead['sa']['ac']]; ?></span>)</p>
  </div>
</address>
