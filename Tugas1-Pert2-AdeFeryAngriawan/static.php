<?php

class Contoh {
    public static $propertiStatis = 10;
    public static function getPropertiStatis() {
        return self::$propertiStatis;
    }

    public static function incrPropertiStatis($number1, $number2) {
        $number = $number1 + $number2; 
        self::$propertiStatis += $number;
    }

    public static function decrPropertiStatis($number) {
      $hasil =  self::$propertiStatis - $number ;
      if ($hasil <= 0){
          echo "Nilai tidak boleh negatif";
      }else{
        echo $hasil;
      }
    }

    
}

echo Contoh::$propertiStatis; // Output: 0
echo "\n===============================================\n";
echo Contoh::decrPropertiStatis(7); 
// echo Contoh::getPropertiStatis(); // Output: 7
?>
