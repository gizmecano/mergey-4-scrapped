<?php
/* Involve general namespaces */

use Michelf\MarkdownExtra;
use Michelf\SmartyPantsTypographer;

/* Random picture
   Code adapted from: "How to get random image from directory using PHP"
   https://stackoverflow.com/q/1761252/4094098
 */

function mrg_pict_random($path)
{
  $find = glob($path . '*.{jpg,png}', GLOB_BRACE);
  $pick = $find[array_rand($find)];
  return $pick;
  unset($path, $find, $pick);
}

/* Full text
   Parse and format entire Markdown file
   with MarkdownExtra and SmartyPants Typographer
   SmartyPants Configuration options
   https://michelf.ca/projects/php-smartypants/configuration/
 */
function mrg_text_full($path, $lang)
{
  $file = file_get_contents($path);
  $text = MarkdownExtra::defaultTransform($file);
  switch ($lang) {
    case 'fr':
      $options = "qDe:+;+m+t+";
      break;
    case 'en':
      $options = "qDet+";
      break;
  }
  $text = SmartyPantsTypographer::defaultTransform($text, $options);
  return $text;
  unset($lang, $path, $text);
}
