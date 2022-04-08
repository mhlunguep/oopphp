<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        
        require 'PremiumCheckingAccount.php';
        
        $premiumCheckingAccount = new PremiumCheckingAccount();

        $premiumCheckingAccount->deposit(1300);
        $premiumCheckingAccount->withdraw(300);
        $premiumCheckingAccount->transfer(500);

        echo $premiumCheckingAccount->minimumBalance;
    ?>
</body>
</html>