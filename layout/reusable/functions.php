<?php
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
