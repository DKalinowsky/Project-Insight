<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
 <?php
 require_once("funkcje.php"); echo "Zalogowano: ";
 if($_SESSION["zalogowany"] == 0){
    header("Location: index.php");
 }
 echo $_SESSION["zalogowanyImie"];
 ?>
 <form method="post" name="logout_site" action="index.php">
<input type="submit" name="logout_button" value="Log Out">
</form>
<?php  
if(isset($_POST["pokaz"])) {
   $target_dir = "images/";
   $target_file = $target_dir . $_FILES["myfile"]["name"];
   if(move_uploaded_file($_FILES['myfile']['tmp_name'],$_FILES['myfile']['name'])){
      echo("<img src=".$_FILES["myfile"]["name"].">");}
else{
   echo('Błąd wyświetlania pliku');
}}
?>
<div>
   <form enctype="multipart/form-data" action="user.php" method="POST">
      <input name="myfile" type="file" />
      <input type="submit" name='pokaz' value="Wyślij" />
   </form>
</div>

 <br><a href="index.php">INDEX</a>
</body>
</html>