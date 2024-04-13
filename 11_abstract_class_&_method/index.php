<?php
    require_once("accounting.php");
    require_once("programmer.php");
    require_once ("sale.php");

    $emp1 = new Accounting("Jane", 20000);
    $emp1 -> showData();
    $emp1 -> description();

    $emp2 = new Programmer("Kong", 50000);
    $emp2 -> showData();
    $emp2 -> description();

    $emp3 = new Sale("Jojo", 80000);
    $emp3 -> showData();
    $emp3 -> description();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class & Method</title>
</head>
<body>
    
</body>
</html>