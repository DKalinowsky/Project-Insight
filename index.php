<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<h2>Please enter your account to became full-fledged member</h2>
<?php //przesyłanie danych
require 'funkcje.php';
if(isset($_POST['login_button'])){
    $log = null;
    if(isset($_POST['login'])){
        $log = zabezpieczenie($_POST['login']);
    }
    $pass = null;
    if(isset($_POST['password'])){
        $pass = zabezpieczenie($_POST['password']);
    }
    /*if($pass!=null && $log!=null){
        echo "Login: ";
        echo $log;
        echo "<br>Password: ";
        echo $pass;
    }*/
}
if(isset($_POST['logout_button'])){
    $_SESSION["zalogowany"] = 0;
}
/*if(isSet($_COOKIE['$cookie_name'])) {
    echo $_COOKIE['$cookie_value'];
}*/
if(isset($_COOKIE["cookie1"])) {
    echo "Value of cookie is ";
    echo $_COOKIE["cookie1"];
}
?>
<form method="post" name="login_site" action="logowanie.php">
<fieldset>
<legend>Log In Site</legend>
Login: <input type="text" name="login"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="login_button" value="Log In">
</fieldset>
</form>
<fieldset>
<legend>Internal user site</legend>
<br><a href="user.php">USER</a>
<a href="Insight.php">Insight</a>
<a href="form06_post.php">Zarejestruj się</a>
</fieldset>
<br><form action="cookie.php" method="get">
<fieldset>
<legend>Cookie file creator</legend>
	<input type="number" name="czas" value="Czas" > 
	<input type="submit" value="createCookie" name="cookie">
    </fieldset>
</form>
</body>
</html>