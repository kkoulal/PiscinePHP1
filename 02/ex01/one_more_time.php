<?php

if($argc == 2)
{
        $str = explode(" ",$argv[1]);  
        $str[0][0] = strtolower($str[0][0]);
        $str[2][0] = strtolower($str[2][0]);
        $month = ['janvier','fevrier','mars', 'avril', 'mai','juin','juillet','aout','septembre','octobre','novembre','decembre'];
        $jour = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi','dimanche'];
        if (!($j = array_search($str[0],$jour)))
        {
            echo "Wrong Format\n";
            return(0);
        }
        if (!($m = array_search($str[2],$month)))
         {
            echo "Wrong Format\n";
            return(0);
         }
         if (!preg_match("/^[0-9]{4}$/", $str[3]))
         {
            echo "Wrong Format\n";
            return(0);
         }
     

        if ($str[0] == NULL || $str[2] == NULL || $j == 0 )
            return(0);
        $s = $m + 1;
     


     
        if (!($d = preg_match("/^[1-2][0-9]$|^0[1-9]$|^3[0-1]$|^[1-9]$/",$str[1])))
        {
            echo "Wrong Format\n";
            return(0);
        }
     
        $stp = explode(":",$str[4]);

         if (preg_match("/^(2[0-3]|[01][0-9]):([0-5][0-9]):([0-5][0-9]$)/",$str[4]))
         {
            date_default_timezone_set('Europe/Paris');
            $result = mktime($stp[0],$stp[1],$stp[2],$s[2],$str[1],$str[3]);
            echo $result;
            echo "\n";
         }
         else
         {  
             echo "Wrong Format";
             echo "\n";
             return(0);
         }

}

?>