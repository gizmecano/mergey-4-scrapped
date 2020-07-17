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
