<?php

    require_once("employee.php");
    class Programmer extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Programmer", $salary);
            
           
        }
        function description(){
            echo " Duty : Development Website <br><hr>";
        }
    }

?>