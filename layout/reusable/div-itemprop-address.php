<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
  <?php
  if(pathinfo(debug_backtrace()[0]['file'])['basename'] === 'proof-imprint.php') { ?>
    <p>
      <span itemprop="streetAddress"><?php echo $masthead['pa']['sa']; ?></span>
    </p>
  <?php
  }
  ?>
  <p>
    <span itemprop="postalCode"><?php echo $masthead['pa']['pc']; ?></span>
    <span itemprop="addressLocality"><?php echo $masthead['pa']['al']; ?></span>
  </p>
  <p>
    <span itemprop="addressRegion"><?php echo $glossary['code']['iso-2'][$masthead['pa']['ar']]; ?></span>
    (<span itemprop="addressCountry"><?php echo $glossary['code']['iso-1'][$masthead['pa']['ac']]; ?></span>)
  </p>
</div>
