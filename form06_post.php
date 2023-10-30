<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "admin", "fajnehaslo", "insight_users");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
if($_SESSION["try"] == 2){
    echo "Nie udało się zarejestrować. Użytkownik o takim ID lub Nazwie już istnieje."."<br>";
    $_SESSION["try"] = 0;
}
print<<<KONIEC
<html>
<head>
</head>
<fieldset>
<legend>Register</legend>
<body> <form action = "form06_redirect_advance.php" method="POST"> 
User ID <input type="number" name="USERS_ID" required><br>
Nickname <input type="text" name="NICKNAME" required><br>
Password <input type="password" name="PASSWORDS" required> <br>
<br><input type="submit" value="Zarejestruj konto">
<input type="reset" value="Wyczyść dane">
</form>
</fieldset>
<fieldset>
<legend>Internal user site</legend>
<a href="form06_get.php">Lista Użytkowników</a><br>
<br><a href="index.php">Zaloguj się</a>
</fieldset>
KONIEC;
?>