<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
session_start();
include_once("config.php");
if(empty($_SESSION['_id'])){
echo "<script>
  window.location.href='../index.php';
</script>";

exit;}
$id=$_SESSION['_id'];
$query = $db->users->find(array("_id" => $id));
foreach($query as $dbQuery)

// if(isset($_POST['Submit'])) {
    $value = "0";
    $newValue = str_pad($value,2,"0");
    $comment = array (
                'content' => $_POST['commentContent'],
                'userid' => $_SESSION['_id'],
                'postid' => new MongoId($_POST['postId'])
            );

    // checking empty fields
    $errorMessage = '';
    foreach ($user as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . 'Something went wrong. Please try again !';
        }
    }

    if ($errorMessage) {
        // print error message & link to the previous page
				// header('Location: ../registerFail.php');
        echo $newValue;
    } else {
        //insert data to database table/collection named 'users'
        $db->comments->insert($comment);

        //display success message
				header('Location: ../../mainpage.php');
    }
// }
?>

</body>
</html>
