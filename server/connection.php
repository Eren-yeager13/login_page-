<?php
$host='localhost';
$dbname='login_page';
$username='root';
$password='';
$port=3307;
try{
    $con=new PDO("mysql:host=$host;port=$port;dbname=$dbname",$username,$password);
    echo"<script>console.log('you have connect successful to $dbname')</script>";
}
catch(PDOException){
    echo"<script>console.log('you was filed pleas check if the server is on !!')</script>";
} 
?>