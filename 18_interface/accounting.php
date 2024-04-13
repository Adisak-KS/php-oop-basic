<?php

    require_once ("employee.php");
    class Accounting extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Accounting", $salary);
        }

        function description(){
            echo " Duty : Salary, Tax <br><hr>";
        }

        function getBonus():string{
            return "Bonus : 10% <br><hr>";
        }
        // public function showData(){
        //     echo "Name : ". $this -> name ."<br>";
        //     echo "Department : ". $this -> department ."<br>";
        //     echo "Salary : ". $this -> salary ."<br>";
        //     echo "<hr>";
        // }
    }

?>