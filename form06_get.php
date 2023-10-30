<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "admin", "fajnehaslo", "insight_users");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
print<<<KONIEC
<h1>Lista Pracowników</h1>
KONIEC;
if($_SESSION["try"] == 1){
    echo "Pomyślnie zarejestrowano"."<br>";
    $_SESSION["try"] = 0;
}
$sql = "SELECT * FROM users";
$result = $link->query($sql);
foreach ($result as $v) {
echo "User ID: " . $v["USERS_ID"]." Nickname: ".$v["NICKNAME"]." Password: ".$v["PASSWORDS"]."<br/>"; }
$result->free();
$link->close();
?>
<a href="form06_post.php">Dodaj użytkownika</a>