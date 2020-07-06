
<?php
     if(isset($_POST['submit']))
    {
           echo "<p> login : " . $_POST['login'] . "</p>";
           echo "<p> password : " . $_POST['password'] . "<p>";
     }
    if ($_POST ['password'] == '2020')
    {
        session_start();
        $_SESSION ['id'] = $_POST['login'];
        echo $_SESSION ['id'];
        header("Location: mini-site-routing.php");
        setcookie("id", $_POST ['login']);
    }
    else 
    {
        echo "Mauvais couple identifiant / mot de passe.";
        echo '<a href="mini-site-routing.php?page=connexion"> connexion </a>';
    }
?>
</html>