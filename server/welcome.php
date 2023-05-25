<?php
include('connection.php');
session_start();
$email=$_SESSION['email'];
$password= $_SESSION['password'];
$SQL_NAME="select LastName from user where Email = '$email' and Password = '$password'";
$LastName=$con->query($SQL_NAME);
$donnees = $LastName->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>
<h1 class="">Welcom Back<?php echo $donnees['LastName']?></h1>
</body>
</html>