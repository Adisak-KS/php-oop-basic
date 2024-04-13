<?php
    require_once("programmer.php");
    require_once("accounting.php");
    require_once("sale.php");


    $emp1 = new Programmer("Kong", 50000, 5);
    $emp1->showData();
    $emp1->officeName("HuaHin");
    echo $emp1->setWorking("WFH");
    echo "<hr>";

    $emp2 = new Programmer("Nut", 70000, 5);
    $emp2->showData();
    $emp2->officeName("BKK");
    echo $emp2->setWorking("Hybrid");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การใช้งาน Interface</title>
</head>
<body>
    
</body>
</html>