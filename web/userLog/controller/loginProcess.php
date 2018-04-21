<html>
<body>
<?php
//including the database connection file
include_once("config.php");


$email = mysql_escape_string($_POST['email']);
$password = mysql_escape_string($_POST['password']);


$user = $db->users;
$qry = array("email" => $email,"password" => ($password));
$result = $user->findOne($qry);
if($result){

  header('Location: ../../mainpage.php');
}else{

  echo 'error';
  echo $email;
  echo $password;
}
?>
</body>
</html>
