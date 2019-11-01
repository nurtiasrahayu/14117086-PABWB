<?php

function faktorial($value){
     $hasil= 1;
    for($i=$value; $i>0; $i--){
        $hasil = $hasil * $value;
    }
    
	echo "$value! adalah $hasil " ;
}
$value = 3;
faktorial($value);
?>

