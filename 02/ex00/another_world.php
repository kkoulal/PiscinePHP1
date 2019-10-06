<?php
$count = 1;
$argv[1] = preg_replace('/\t/', ' ', $argv[1]);
while($count)
   $argv[1]=str_replace('  ',' ',$argv[1],$count);
$str = $argv[1];
$nwstr = trim($str);
echo $nwstr;
echo "\n";
?>