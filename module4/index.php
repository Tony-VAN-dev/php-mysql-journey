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
                        echo "Création de la personne ". $row['prenom'] . " réussie ! <br>";
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
                    echo "Prénom " . $row['prenom']. " âge : ". $row['age']."<br>";
                }
            }
    }

    function updateSomeone($conn, $id, $prenom)
    {
        $updateSomeoneQuery = "UPDATE personnes SET prenom = " . "'" .$prenom ."'" . " WHERE ID = ". $id;

        $result = mysqli_query($conn, query: $updateSomeoneQuery);
        if($result){
            return $result;
        }else{
            die("Erreur de mis à jour de la personne : ". mysqli_error($conn)."<br>");
        }
    }

    function deleteSomeone($conn, $id)
    {
        $selectSomeoneQuery = "SELECT prenom FROM personnes WHERE ID=" . $id .";";
        $deleteSomeoneQuery = "DELETE FROM personnes WHERE ID =".$id.";";
        $result = mysqli_query($conn, $selectSomeoneQuery);
        $someoneName = mysqli_fetch_assoc($result);

        if(mysqli_query($conn, $deleteSomeoneQuery))
        {
            echo "La personne ".$someoneName['prenom'] . " a bien été supprimée !<br>";
        }else
        {
            echo "Aucune personne à supprimer de trouvé";
        }
    }

    // creerUnePersonne($conn, "Tony", 20);
    // updateSomeone($conn,7, "Tony");
    deleteSomeone($conn,30);
    displayPeople($conn);
    
?>