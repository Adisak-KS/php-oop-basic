<?php

    require_once("employee.php");

    class sale extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Sale", $salary);
        }
        function description(){
            echo " Duty : Sell Products <br><hr>";
        }
    }

?>