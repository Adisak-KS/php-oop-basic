<?php
    class Employee{
        private $name;
        private $department;
        private $salary;


        public function setName($name){
            $this -> name = $name;
        }

        public function setDepartment($department){
            $this -> department = $department;
        }

        public function setSalary($salary){
            $this -> salary = $salary;
        }

        public function showData(){
            echo "Name : ". $this -> name ."<br>";
            echo "Department : ". $this -> department ."<br>";
            echo "Salary : ". $this -> salary ."<br>";
            echo "<hr>";
        }
    }


    $emp1 = new Employee();
    $emp1 -> setName("Jane");
    $emp1 -> setDepartment("Accouting");
    $emp1 -> setSalary(20000);
    $emp1 -> showData();

    $emp2 = new Employee();
    $emp2 -> setName("Kong");
    $emp2 -> setDepartment("IT");
    $emp2 -> setSalary(50000);
    $emp2 -> showData();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้าง Method </title>
</head>
<body>
    
</body>
</html>