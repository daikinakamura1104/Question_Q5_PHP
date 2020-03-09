<?php
    class Fruits{
        public $name =array("桃","イチゴ");
        public $prices1 = array();
        public $prices2 = array();
        public $sum = 15;
        
     

        public function getName(){
            return $this->name;
        }

        public function getPrices1(){
            for($i=1; $i<=15;$i++){
                $this->prices1[] +=rand(200,300);
            }
            return $this->prices1;
        }

        public function getPrices2(){
            for($i=1; $i<=15;$i++){
                $this->prices2[] +=rand(400,500);
            }
            return $this->prices2;
        }

        public function getSum(){
            return $this->sum;
        }
    }
?>