<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: index.php");
        exit();
    }
    echo "Bienvenue ".$_SESSION['username']." sur le dashboard !<br>";
    echo '<a href="logout.php">Se déconnecter</a>';
?>