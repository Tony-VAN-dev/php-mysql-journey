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
                        echo "Création de la personne ". $row['prenom'] . " réussie !";
                    }
            } else{
                die("Erreur de connexion : ". mysqli_error($conn));
            }
    }
    function displayPeople($conn){
        $selectPeopleQuery = "SELECT * FROM personnes".";"; //requête
        $result = mysqli_query($conn,$selectPeopleQuery); // réponse suite à la requête

        if($result)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "Prénom " . $row['prenom']. " âge : ". $row['age'];
                }
            }
    }
    // creerUnePersonne($conn, "Tony", 20);
    displayPeople($conn);
    
?>