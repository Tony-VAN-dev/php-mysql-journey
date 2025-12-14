<?php
    function direBonjour($prenom){
        return "Bonjour ".$prenom;
    }
    $prenom = "Tony";
    echo direBonjour($prenom)."<br>";

    $age = 20;
    $prenoms = ["Tony", "Ilyes", "Rabia"];
    $nbTour = 0;
    
    //VARIABLES ET FONCTIONS
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Votre prénom">
    <input type="submit" value="Envoyer">
</form>

<?php // BOUCLES
    while ($nbTour < count(value: $prenoms))
    {
        echo ++$nbTour."<br>";
    }

    foreach($prenoms as $e){
        echo $e."<br>";
    }
?>


<? // CONDITIONS DU FORMULAIRE
    if(isset($_POST['prenom']) && $_POST['prenom'] == ""){
            echo "Entrez votre prénom d'abord";
    }
    else if(isset($_POST['prenom']) && $_POST['prenom'] == "Tony")
    {
        echo "Bonjour ".$_POST['prenom']." ". "ton age est ".$age;
        
    }else if(isset($_POST['prenom']) && $_POST['prenom'] !== "Tony"){
        echo direBonjour(prenom: $_POST['prenom']);
    }
    
?>

