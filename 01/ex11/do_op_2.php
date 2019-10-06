#!/usr/bin/php
<?php


 function epu_str($str)
 {
 $count = 1;
 while($count)
 {
     $str = str_replace(' ','', $str, $count);
 }
 $str = trim($str);
 return ($str);
 }
 
 if ($argc != 2)
 {
     echo "Incorrect Parameters";
     return (0);
 }
 $argv[1] = epu_str($argv[1]);
 $str  = $argv[1];
 $str1 = $argv[1];
 $j = 0;
 while ($str[$j++])
 {
     if (($str[$j] >= 'a' && $str[$j] <= 'z') || ($str[$j] >= 'A' && $str[$j] <= 'Z'))
     {
         echo "Syntax Error\n";
         return (0);
     }
 }
 $i = 0;
 $te = 0;
 $all = sscanf($argv[1], "%d %c %d");
 
 if ($all[0] == NULL || $all[1] == NULL || $all[2] == NULL)
 {
     echo "Syntax Error\n";
     return (0);
 }
 
 if ($all[1] == '+')
 {
     $resulta = $all[0] + $all[2];
     echo $resulta;
     echo "\n";
 }
 else if ($all[1] == '*')
 {
     $resulta = $all[0] * $all[2];
     echo $resulta;
     echo "\n";
 }
 
 else if ($all[1] == '/')
 {
     $resulta = $all[0] / $all[2];
     echo $resulta;
     echo "\n";
 }
 else if ($all[1] == '%')
 {
     $resulta = $all[0] % $all[2];
     echo $resulta;
     echo "\n";
 }
 
 else if ($all[1] == '-')
 {
     $resulta = $all[0] - $all[2];
     echo $resulta;
     echo "\n";
 }
 else 
 {
     echo "Syntax Error\n";
     return (0);
 }
?>