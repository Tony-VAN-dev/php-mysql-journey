<?php
    //les conditions
    $age = 0;

    if($age < 18)
    {
        echo "Désolé, vous ne pouvez pas aller naviguer sur ce site <br>";
    } else{
        echo "Vous pouvez aller naviguer sur ce site, bonne journée / soirée à vous. <br>";
    }

    //tant que i est inférieur à 18 ou égale à 18, j'incrémente i
    for($i = $age; $i <= 18 ;$i++)
    {
        echo "Vous avez ".$i." ans <br>";
    }

    $age = 18; // age vaut désormais 18
    echo $age. "<br>";

    if($age < 18)
    {
        echo "Désolé, vous ne pouvez pas aller naviguer sur ce site <br>";
    } else{
        echo "Vous pouvez aller naviguer sur ce site, bonne journée / soirée à vous. <br>";
    }
?>