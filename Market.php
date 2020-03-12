<?php
    class Market{
       
        public function start($strawberry,$peach){
            echo "----マーケット開始----"."\n";
            $this->fruitdetail($strawberry,$peach);
            $this->calculation($strawberry,$peach);
        }

        public function fruitdetail($strawberry,$peach){
            $nameofStrawberry = $strawberry->getName();
            $nameofPeach = $peach->getName();
            $sumofStrawberry = $strawberry->getSum();
            $sumofPeach = $peach->getSum();
           echo "果物の種類は".$nameofStrawberry."と".$nameofPeach."です。"."\n";
           echo "果物の数は".$nameofStrawberry."は".$sumofStrawberry."個、".$nameofPeach."は".$sumofPeach."個です。"."\n";
        }

        public function calculation($strawberry,$peach){
            $nameofStrawberry = $strawberry->getName();
            $nameofPeach = $peach->getName();
            $priceofStrawberry = $strawberry->getPrices();
            $priceofPeach = $peach->getPrices();
            $maxpriceofStrawberry = max($priceofStrawberry);
            $maxpriceofPeach = max($priceofPeach);
            echo "① 果物の最高値"."\n";
            echo $nameofPeach."の最高値は".$maxpriceofPeach."円です。"."\n";
            echo $nameofStrawberry."の最高値は".$maxpriceofStrawberry."円です。"."\n";
            

            $minpriceofStrawberry = min($priceofStrawberry);
            $minpriceofPeach = min($priceofPeach);
            echo  "② 果物の最安値"."\n";
            echo $nameofPeach."の最安値は".$minpriceofPeach."円です。"."\n";
            echo $nameofStrawberry."の最安値は".$minpriceofStrawberry."円です。"."\n";

            $sumpriceofStrawberry = array_sum($priceofStrawberry);
            $avgofStrawberry = $sumpriceofStrawberry/count($priceofStrawberry);
            $sumpriceofPeach = array_sum($priceofPeach);
            $avgofPeach = $sumpriceofPeach/count($priceofPeach);
            echo  "③ 果物の平均価格"."\n";
            echo $nameofPeach."の平均価格は".floor($avgofPeach)."円です。"."\n";
            echo $nameofStrawberry."の平均価格は".floor($avgofStrawberry)."円です。"."\n";

            echo "----マーケット終了----"."\n";

        }
    }
?>