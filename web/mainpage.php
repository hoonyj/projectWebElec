<!DOCTYPE html>
<html lang="en">
<?php
$connection = new MongoClient( "mongodb://localhost" );
$db = $connection->project_sql;
?>


<head>
  <title>Food Lovers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Foodloger</h1>

<?php
$query = $db->users->find();

echo '<pre>';

foreach ( $query as $current )
    print_r($current);

echo '</pre>';
?>
Main pages(can only see when the user log-in from index.html)


</body>
</html>
