<?php
$r = -1; 
for($i = 0; $i <= 100; $i++){
    if(primos($i)){
        $r = $r + $i;
        }else{
        }
    }
        echo $r;
        function primos($num)
        {
            for($i = 2; $i < $num; $i++){
                if(($num % $i) == 0){
                    return false;
                }
            }
            return true;
        }
?>