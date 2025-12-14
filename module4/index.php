<?php
    require 'dbh.ext.php';

    $sqlQuery = 'SELECT * FROM personnes;';

    function creerUnePersonne($conn, $prenom,$age): void{
        $createSomeoneQuery = 'INSERT INTO personnes (prenom, age) VALUES('. '"'. $prenom . '"'. ",".$age.");";
        //condition si requête fonctionne
        if(mysqli_query($conn, $createSomeoneQuery))
            {
                $result = mysqli_query($conn, "SELECT * FROM personnes".";");
                while($row = mysqli_fetch_assoc(result: $result))
                    {
                        echo "prénom : ". $row['prenom']. " " ."âge" . $row['age'];
                    }
            }
    }

    creerUnePersonne($conn, "Tony", 20);
?>