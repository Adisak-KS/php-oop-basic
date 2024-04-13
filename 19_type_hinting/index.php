<?php
    require_once("employee.php");

    $emp1 = new Employee("Kong", "Owener", 100000);
    $emp2 = new Employee("Looknam", "Support", 50000);
    $emp3 = new Employee("Jojo", "Support", 40000);

    showEmployee($emp1);
    showEmployee($emp2);
    showEmployee($emp3);

    function showEmployee(Employee $obj){
        echo "----Employee Detail ------- <br>";
        echo "Name : ".$obj->name ."<br>";
        echo "Department : ".$obj->department ."<br>";
        echo "Salary : ".$obj->salary ."<br>";
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Hinting</title>
</head>
<body>
    
</body>
</html>