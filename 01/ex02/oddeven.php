#!/usr/bin/php
<?php
 echo "Entrer un nombre: ";
while (1)
{
    $nombre = fgets(STDIN);
    if (feof(STDIN))
    {
        echo "\n";
        break;
    }
    $number = rtrim($nombre, "\n");
    if (is_numeric ($number))
    {
        if ($number % 2 == 0)
        {
            echo "Le chiffre $number est Pair";
        }
        else
        {
        echo "Le chiffre $number est impair";
        }

    }
    else
    {
        echo  "'$number' n'est pas un chiffre";
    }
    echo "\n";
    echo "Entrer un nombre: ";
}
?>