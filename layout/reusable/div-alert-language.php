<div role="alert">
  <?php
  $path = $_SERVER['DOCUMENT_ROOT'] . '/speech/' . $site['lang'] . '/alert-language.md';
  if (isset($path)) {
    echo mrg_text_full($path, $site['lang']);
  }
  unset($path);
  ?>
</div>
