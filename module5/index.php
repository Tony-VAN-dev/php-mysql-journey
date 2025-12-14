<?php
    session_start();
    if(isset($_POST['username']) && !empty($_POST['password']))
    {
         if($_POST['password'] == "secret")
        {
            $_SESSION['username'] = $_POST['username'];
            echo '<a href="logout.php">Se déconnecter</a>';
        
        } 
        else
        {
            echo "Mot de passe incorrect";
        }
    }
       
?>

<form method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">
</form>