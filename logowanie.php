<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
require "funkcje.php";
$log = zabezpieczenie($_POST['login']);
$pass = zabezpieczenie($_POST['password']);
$logos1 = $osoba1->login;
$logos2 = $osoba2->login;
$passos1 = $osoba1->password;
$passos2 = $osoba2->password;
$_SESSION["zalogowany"] = 0;
if($log == $logos1 && $pass == $passos1){
    $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
    echo $_SESSION["zalogowanyImie"];
    $_SESSION["zalogowany"] = 1;
}
if($log == $logos2 && $pass == $passos2){
    $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
    echo $_SESSION["zalogowanyImie"];
    $_SESSION["zalogowany"] = 1;
}
if($_SESSION["zalogowany"] == 1){
    header("Location: user.php");
}
if($_SESSION["zalogowany"] == 0){
    header("Location: index.php");
}
?>
</body>
</html>