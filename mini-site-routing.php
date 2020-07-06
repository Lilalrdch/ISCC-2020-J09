<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/vitrine.css">
</head>
 <body>
    <nav>
    <a href = "mini-site-routing.php?page=connexion"> Connexion</a>
    <a herf="admin.php">Administration</a>
     <nav>
<?php
session_start();
if(isset ($_GET['page']))
{
    if ($_GET['page'] == 'connexion')
    {
        require "connexion.php";
    }
}
if (!isset ($_SESSION["id"]))
{
    if (isset ($_COOKIE["id"]))
    {
        $_SESSION["id"] = $_COOKIE["id"];
    }
}
else
{
    header("Location: mini-site-routing.php");
}
echo "<p> Login: " . $_SESSION['id'] . "</p>";
?>
<body>
<html>