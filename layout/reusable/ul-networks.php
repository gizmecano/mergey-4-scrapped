<?php
$networks = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/networks.json'), true);
?>
<ul class="scalable">
  <?php
  foreach ($networks['network'] as $linkitem) {
    $file = strtolower($_SERVER['DOCUMENT_ROOT'] . '/design/artwork/brands/' . $linkitem['name'] . '.svg');
  ?>
    <li>
      <a href="<?php echo $linkitem['link']; ?>"><?php echo trim(file_get_contents($file)) . $linkitem['name']; ?></a>
    </li>
  <?php
  }
  unset($networks, $linkitem);
  ?>
</ul>
