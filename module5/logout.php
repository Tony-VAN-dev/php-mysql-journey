<?php
    session_start();
    session_unset();
    session_destroy();

    echo "Vous êtes déconnecté <br>";
    echo '<a href="index.php">Se connecter</a>';
?>