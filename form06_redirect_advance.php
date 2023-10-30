<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "admin", "fajnehaslo", "insight_users");
$sql = "SELECT * FROM users";
$result = $link->query($sql);
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error()); exit();
}
if (isset($_POST['USERS_ID']) && isset($_POST['NICKNAME']) && isset($_POST['PASSWORDS']))
{
    foreach($result as $v){
        if($v["USERS_ID"]==$_POST["USERS_ID"]){
            $_SESSION["error"] = 0;
            $_SESSION["try"] = 2;
            header("Location: form06_post.php");
        }
    }
$sql = "INSERT INTO users(USERS_ID,NICKNAME,PASSWORDS) VALUES(?,?,?)"; $stmt = $link->prepare($sql); // ON DUPLICATE KEY UPDATE USERS_ID=USERS_ID, NICKNAME=NICKNAME;
$stmt->bind_param("iss", $_POST['USERS_ID'], $_POST['NICKNAME'], $_POST['PASSWORDS']); $result = $stmt->execute();
$_SESSION["error"] = 1;
if (!$result) {
printf("Query failed: %s\n", mysqli_error($link));
}
$stmt->close();
}
else{
    $_SESSION["error"] = 0;
    $_SESSION["try"] = 2;
    header("Location: form06_post.php");
}


/*$select = mysqli_query($link, "SELECT * FROM users WHERE NICKNAME = '".$_POST['NICKNAME']."'");
if(mysqli_num_rows($select)) {
    $_SESSION["error"] = 0;
}
else{
    $_SESSION["error"] = 1;
}*/
/*$username = $_POST['NICKNAME'];
$stmt = $link->prepare("SELECT * FROM users WHERE NICKNAME=?");
$stmt->execute([$username]); 
$user = $stmt->fetch();
if (!$user) {
    $_SESSION["error"] = 1;
} 
if ($user) {
    $_SESSION["error"] = 0;
}*/
$sql = "SELECT * FROM users";
//$result = $link->query($sql);
if ($_SESSION["error"] == 1){
    $_SESSION["try"] = 1;
    header("Location: form06_get.php");}
if ($_SESSION["error"] == 0){
    $_SESSION["try"] = 2;
    header("Location: form06_post.php");}
$result->free();
$link->close();
?>