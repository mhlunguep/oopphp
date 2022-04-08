<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>
<body>
    <?php
        require_once 'StockManager.php';
        require_once 'CsvFileReader.php';

        $stockManager = new StockManager();
        $csvFileReader = new CsvFileReader();

        $stockManager->updateStockFromFlie('inventory.csv', $csvFileReader);
    ?>
</body>
</html>