#!/usr/bin/php
<?php
  if ($argc >= 3)
  {
      $search = $argv[1];
      $i = 2;
      while($i != $argc)
      {
          $tmp = explode(":", $argv[$i]);
          if ($search == $tmp[0])
              $result = $tmp[1];
      $i++;
      }
      echo $result;
      echo "\n"
  }
?>
?>