<?php

    require_once("employee.php");
    require_once("office.php");
    require_once("company.php");


    class Programmer extends Employee implements Office, Company{
        private $exp;

        function __construct($name, $salary, $exp){
            $this->exp = $exp;
            parent::__construct($name, "Programmer", $salary);
        }
        
        function description(){
            echo " Duty : Development Website <br><hr>";
        }

        function getBonus():string{
            return "Bonus : 30% <br><hr>";
        }

        /*
        // รูปแบบ 1
        function skill($args){
            echo "Skill : ". $args ."<br>";
        }
        */

        // รูปแบบ 2
        // Overloading Method
        function __call ($name, $args){
            if($name == "skill"){
                $c = count($args); // นับจำนวน argument
                switch($c){
                    case 1:
                        echo "Tach Skill : ".$args[0]. "<br>";
                        break;
                    case 2:
                        echo "Tach Skill : ".$args[0].", ". $args[1] ."<br>";
                        break;
                    case 3:
                        echo "Tach Skill : ".$args[0].", ". $args[1] .", " . $args[2] ."<br>";
                        break;
                    default:
                        echo "Not Found";
                }
            }
        }

        function __toString():string{
            return "โปรแกรมเมอร์ชื่อ : ". $this->name ." เงินเดือน : ". $this->salary ."<br>";
        }

        public function showData(){
            echo "Name : ". $this -> name ."<br>";
            echo "Department : ". $this -> department ."<br>";
            echo "Salary : ". $this -> salary ."<br>";
            echo "Exp : ". $this -> exp ."<br>";

        }
        public function officeName($name){
            echo "Office : ". $name ."<br>";
        }

        public function setWorking($work):string{
            return "Working style : ". $work ."<br>";
        }
        
        public function setCompanyName($name){

        }
    }

?>