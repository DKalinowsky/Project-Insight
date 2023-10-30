<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "admin", "fajnehaslo", "insight_users");
if (!$link) {
$_SESSION["error"] = 0;
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
if (isset($_POST['NICKNAMES']) && isset($_POST['PASSWORDS']))
{
$sql = "INSERT INTO insight_users(NICKNAMES,PASSWORDS) VALUES(?,?)"; $stmt = $link->prepare($sql);
$stmt->bind_param("ss", $_POST['NICKNAMES'], $_POST['PASSWORDS']); $result = $stmt->execute();
$_SESSION["error"] = 1;
if (!$result) {
printf("Query failed: %s\n", mysqli_error($link));
$_SESSION["error"] = 0;
}
$stmt->close();
}
$sql = "SELECT * FROM insight_users";
$result = $link->query($sql);
if ($_SESSION["error"] = 1){
header("Location: form06_get.php");}
if ($_SESSION["error"] = 0){
header("Location: form06_post.php");}
$result->free();
$link->close();
?>