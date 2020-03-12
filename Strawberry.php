<?php
    require_once("Fruit.php");

    class Strawberry extends Fruit{
       
        public function getName(){
            return $this->name = "イチゴ";
        }

        public function getPrices(){
            for($i=1; $i<=15;$i++){
                $this->prices[] +=rand(400,500);
            }
            return $this->prices;
        }

        public function getSum(){
            return $this->sum;
        }
    }
?>