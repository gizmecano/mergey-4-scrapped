<?php
/* Define language attribute */
if ($site['lang'] != 'fr') {
  $site['lang'] = 'en';
}
if (empty($page['lang'])) {
  $page['lang'] = $site['lang'];
}

/* Decode languages glossaries */
$glossary = json_decode(file_get_contents('speech/idioms/' . $page['lang'] . '/glossary.json'), true);

/* Compose specific metadata according to page type */
if(isset($page['type'])) {
  $page['name'] = ucfirst($glossary['page'][$page['body']][$page['type']]);
}

switch ($page['body']) {
  case 'index':
    $meta['canon'] = $site['host'];
    $meta['title'] = $site['name'];
    break;
  default:
    $meta['canon'] = $site['host'] . $page['body'] . '/' . $page['type'];
    $meta['title'] = $page['name'] . ' &#8226; ' . $site['name'];
}
