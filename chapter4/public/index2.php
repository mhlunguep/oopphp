<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>
<?php

    use App\Logging\Logger;
    use App\Users\Customer;

    require_once 'autoload.php';

    $logger = new Logger();
    $customer = new Customer();
    $customer->setLogger($logger);

?>    

<p><?php $customer->getLogger()->log(); ?></p>
</body>
</html>