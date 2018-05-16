<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

// if(isset($_POST['Submit'])) {
    $value = "0";
    $newValue = str_pad($value,2,"0");
    $post = array (
                'content' => $_POST['postContent'],
                'email' => $_SESSION['email'],
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
        $db->posts->insert($post);

        //display success message
				header('Location: ../../mainpage.php');
    }
// }
?>

</body>
</html>
