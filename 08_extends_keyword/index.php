<?php
    require_once("accounting.php");
    require_once ("programmer.php");

    $emp1 = new Accounting("Jane", "Accounting", 20000);
    $emp1 -> setSalary(80000);
    $emp1 -> showData();

    $emp2 = new Programmer("Kong", "Programmer", 50000);
    $emp2 -> showData();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสืบทอดคุณสมบัติ (Extends Keyword)</title>
</head>
<body>
    
</body>
</html>