<?php
$networks = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/networks.json'), true);
?>
<ul class="scalable">
  <?php
  foreach ($networks['network'] as $linkitem) {
    $iconfile = strtolower($_SERVER['DOCUMENT_ROOT'] . '/design/artwork/brands/scalable/' . $linkitem['name'] . '.svg');
  ?>
    <li>
      <a href="<?php echo $linkitem['link']; ?>">
        <?php echo trim(file_get_contents($iconfile)) . $linkitem['name']; ?>
      </a>
    </li>
  <?php
  }
  unset($iconfile, $linkitem, $networks);
  ?>
</ul>
