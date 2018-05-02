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
    $user = array (
                'lastName' => $_POST['lastName'],
                'firstName' => $_POST['firstName'],
                'email' => $_POST['eMail'],
                'password' => $_POST['password'],
                'userType' => $_POST['userType'],
                'follower' =>  $newValue,
                'following' =>  $newValue
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
        $db->users->insert($user);

        //display success message
				header('Location: ../../../index.php');
    }
// }
?>

</body>
</html>
