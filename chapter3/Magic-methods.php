<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Methods</title>
</head>
<body>
    <?php
        require 'Connection.php';

        $connection = new Connection();
        $connection2 = new Connection();

        unset($connection2);

    ?>

    <p>The number of connection is <?php echo $connection->getCount(); ?></p>
</body>
</html>