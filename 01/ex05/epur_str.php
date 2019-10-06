#!/usr/bin/php
<?php
if ($argc != 2)
    return 0;
 $count = 1;
 while($count)
    $argv[1]=str_replace('  ',' ',$argv[1],$count);
 $argv[1]= trim($argv[1]);
 echo "$argv[1]\n";
?>