<?php
    require 'dbh.ext.php';

    $sqlQuery = 'INSERT INTO personnes (prenom, age) VALUES("Ilyes", 20)';

    if(mysqli_query($conn,$sqlQuery))
    {
        echo "Nouvelle personne ajoutée";
    } else{
        echo "Erreur : ".mysqli_error($conn);
    }
    //si la requête fonctionne
    $sqlQuery = 'SELECT * FROM personnes;';
    $result = mysqli_query($conn, $sqlQuery);
    while($row = mysqli_fetch_assoc(result: $result))
    {
        echo "Prénom : ".$row['prenom'] . " " . "Age : " . $row['age']."<br>";
    }

?>