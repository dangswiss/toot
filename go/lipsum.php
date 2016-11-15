<?php

$content = file_get_contents('content.txt');
$strlen = strlen($content);
$tootmax = 100;
$randmax = $strlen-$tootmax;
$rand = rand($tootmax,$randmax);
$strpos = strpos($content,' ',$tootmax);
$substr = substr($content,$rand,$strpos);
$tsearch = array('.',',','\'','-','+','&','’','?','!','#','*','  ',"\n","\r","\r\n");
$treplace = '';
$toot = 'trump ' . str_replace($tsearch,$treplace,$substr);

?>
