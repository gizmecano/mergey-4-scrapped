<?php
/* Define language attribute */
if ($site['lang'] != 'fr') {
  $site['lang'] = 'en';
}
if (empty($page['lang'])) {
  $page['lang'] = $site['lang'];
}

/* Decode languages glossaries */
$glossary = json_decode(file_get_contents('speech/' . $page['lang'] . '/glossary.json'), true);

/* Compose specific metadata according to page type */
if (isset($page['type'])) {
  $page['name'] = ucfirst($glossary['page'][$page['body']][$page['type']]);
}

/* Compose canonical link according to page type */
switch ($page['body']) {
  case 'error':
    $meta['canon'] = $site['host'] . $page['body'] . '-' . $page['type'];
    break;
  case 'index':
    $meta['canon'] = $site['host'];
    break;
  default:
    $meta['canon'] = $site['host'] . $page['type'];
}

/* Compose page title according to page type */
switch ($page['body']) {
  case 'index':
    $meta['title'] = $site['name'];
    break;
  default:
    $meta['title'] = $page['name'] . ' &#8226; ' . $site['name'];
}

/* Define description content according to page type */
if (empty($meta['blurb'])) {
  switch ($page['body']) {
    case 'error':
    case 'proof':
      $meta['blurb'] = ucfirst($glossary['page'][$page['body']][$page['type']]);
      break;
    case 'index':
      $meta['blurb'] = $site['name'] . ' &#8226; ' . $glossary['site']['motto'];
      break;
    case 'stall':
      $meta['blurb'] = $site['name'] . ' &#8226; ' . ucfirst($glossary['page'][$page['body']][$page['type']]);
      break;
  }
}
