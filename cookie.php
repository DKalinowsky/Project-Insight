<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
$czas = $_GET["czas"];
setcookie("cookie1", "Insight_Cookie", time() + $czas, "/");
if(isset($czas)) {
    echo "Cookie is set!";}
?>
<br><a href="index.php">USER</a><br>
</body>
</html>