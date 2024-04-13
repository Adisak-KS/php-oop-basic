<?php

    class Employee{
        public $name;
        public $department;
    }


    $emp1 = new Employee();
    $emp1 -> name = "Jame";
    $emp1 -> name = "Jinny";
    $emp1 -> department = "Accouting";

    echo "Employee Name : ". $emp1 -> name ."<br>";
    echo "Department : ". $emp1 -> department ."<br>";
    echo "<hr>";


    $emp2 = new Employee();
    $emp2 -> name = "Kong";
    $emp2 -> department = "IT";
    echo "Employee Name : ". $emp2 -> name ."<br>";
    echo "Department : ". $emp2 -> department ."<br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้าง Attribute </title>
</head>
<body>
    
</body>
</html>