<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace</title>
</head>
<body>
<?php
    use Database\MySQL\Connection as MySqlConnection;
    use Database\PostgreSQL\Connection as PostgreSQLConnection;
    
    require 'Database/mysql/connection.php';
    require 'Database/postgresql/connection.php';

    $mySqlConnection = new MySqlConnection();
    $postgreSQLConnection = new PostgreSQLConnection();
?>

<h2>Database Connections</h2>
<ul>
    <li><?php echo $mySqlConnection->getDatabaseUrl();?></li>
    <li><?php echo $postgreSQLConnection->getDatabaseUrl();?></li>
</ul>
</body>
</html>