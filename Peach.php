<?php
    require_once("Fruit.php");

    class Peach extends Fruit{
       
        public function getName(){
            return $this->name = "桃";
        }

        public function getPrices(){
            for($i=1; $i<=15;$i++){
                $this->$prices[] +=rand(200,300);
            }
            return $this->$prices;
        }

        public function getSum(){
            return $this->sum;
        }
    }
?>