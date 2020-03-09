<?php
    class Market{
       
        public function start($fruit){
            echo "----マーケット開始----"."\n";
            $this->fruitdetail($fruit);
            $this-> calculation($fruit);
        }

        public function fruitdetail($fruit){
            $prices1 = $fruit->getPrices1();
            $names = $fruit->getName();
            $sum = $fruit->getSum1();
           echo "果物の種類は".$names[0]."と".$names[1]."です。"."\n";
           echo "果物の数は".count($prices1)."個ずつです。"."\n";
        }

        public function calculation($fruit){
            $names = $fruit->getName();
            
            $price1 = $fruit->getPrices1();
            $maxprice1 = max($price1);
            $price2 = $fruit->getPrices2();
            $maxprice2 = max($price2);
            echo "① 果物の最高値"."\n";
            echo $names[0]."の最高値は".$maxprice1."円です。"."\n";
            echo $names[1]."の最高値は".$maxprice2."円です。"."\n";
            

            $minprice1 = min($price1);
            $minprice2 = min($price2);
            echo  "② 果物の最安値"."\n";
            echo $names[0]."の最安値は".$minprice1."円です。"."\n";
            echo $names[1]."の最安値は".$minprice2."円です。"."\n";

            $sum1 = array_sum($price1);
            $avg1 = $sum1/count($price1);
            $sum2 = array_sum($price2);
            $avg2 = $sum2/count($price2);
            echo  "③ 果物の平均価格"."\n";
            echo $names[0]."の平均価格は".floor($avg1)."円です。"."\n";
            echo $names[1]."の平均価格は".floor($avg2)."円です。"."\n";

            echo "----マーケット終了----"."\n";

        }
    }
?>