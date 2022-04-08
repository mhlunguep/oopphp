<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloding</title>
</head>
<body>
<?php

use \App\Connection\mySqlConnection as MySqlConnection;
use \App\Utility\RandomUtilityClass as RandomUtility;

include 'autoload.php';

     $mySqlConnection = new MySqlConnection();
    $randomUtility = new RandomUtility();

?>

<p><?php echo $mySqlConnection->databaseUrl; ?></p> 
<p><?php echo $randomUtility->status; ?></p>
</body>
</html>