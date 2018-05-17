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

  $_SESSION['_id']=$result['_id'];

  header('Location: ../../mainpage.php');
}else{
	echo "<script type='text/javascript'>alert('Email or password is incorrect');</script>";
}
?>
</body>
</html>
