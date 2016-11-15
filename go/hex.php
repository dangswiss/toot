<?php

$rand1 = rand(0,9);
$rand2 = rand(0,9);
$rand3 = rand(0,9);
$rand4 = rand(0,9);
$rand5 = rand(0,9);
$rand6 = rand(0,9);
$hex = $rand1 . $rand2 . $rand3 . $rand4 . $rand5 . $rand6;

print '
<style type="text/css">

.well {
  background: #' . $hex . ';
}

</style>';

?>

