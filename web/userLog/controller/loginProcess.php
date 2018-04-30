<html>
<body>
<?php
//including the database connection file
session_start();
include_once("config.php");


$email = mysql_escape_string($_POST['email']);
$password = mysql_escape_string($_POST['password']);


$user = $db->users;
$qry = array("email" => $email,"password" => ($password));
$result = $user->findOne($qry);
if($result){

  $_SESSION['email']=$qry['email'];

  header('Location: ../../mainpage.php');
}else{

  echo 'error';
}
?>
</body>
</html>
