<?php
    session_start();
    if(isset($_POST['username']))
    {
        $_SESSION['username'] = $_POST['username'];
    }

    if(isset($_SESSION['username']))
    {
        echo "Bonjour ". $_SESSION['username'] . " ! ";
        echo '<a href="logout.php">Se déconnecter</a>';
    }
?>

<form method="post">
    <input type="text" name="username">
    <input type="submit">
</form>