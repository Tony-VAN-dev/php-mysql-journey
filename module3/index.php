<?php
    function direBonjour($prenom){
        return "Bonjour ".$prenom;
    }
    $prenom = "Tony";
    echo direBonjour($prenom)."<br>";
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Votre prénom">
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST['prenom'])){
        echo direBonjour($_POST['prenom']);
    }
?>