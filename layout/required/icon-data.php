<link rel="apple-touch-icon-precomposed" href="design/artwork/brands/portable/favicon-180.png">
<link rel="shortcut icon" sizes="196x196" href="design/artwork/brands/portable/favicon-196.png">
<?php
$path = 'design/artwork/brands/portable/';
$list = glob($path . '*.png');
natsort($list);
foreach (array_reverse($list) as $icon) {
  $size = getimagesize($icon);
?>
  <link rel="icon" type="image/png" sizes="<?php echo $size[0]; ?>x<?php echo $size[0]; ?>" href="<?php echo $icon; ?>">
<?php
}
unset($icon, $list, $path, $size);
?>
