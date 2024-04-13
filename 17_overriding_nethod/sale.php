<?php

    require_once("employee.php");
    class sale extends Employee{
        private $area;
        function __construct($name, $salary, $area){
            $this->area = $area;
            parent::__construct($name, "Sale", $salary);
        }

        function description(){
            echo " Duty : Sell Products <br><hr>";
        }
        
        function getBonus():string{
            return "Bonus : 20% <br><hr>";
        }

        public function showData(){
            echo "Name : ". $this -> name ."<br>";
            echo "Department : ". $this -> department ."<br>";
            echo "Salary : ". $this -> salary ."<br>";
            echo "Area : ". $this -> area ."<br>";
            echo "<hr>";
        }
    }

   
?>