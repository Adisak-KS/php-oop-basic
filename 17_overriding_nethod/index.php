<?php
    require_once("programmer.php");
    require_once("accounting.php");
    require_once("sale.php");


    $emp1 = new Programmer("Kong", 50000, 5);
    $emp1->showData();
    $emp2 = new Accounting("Nut", 70000);
    $emp2->showData();
    $emp3 = new sale("Jojo", 40000,"HuaHin");
    $emp3->showData();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding Method</title>
</head>
<body>
    
</body>
</html>