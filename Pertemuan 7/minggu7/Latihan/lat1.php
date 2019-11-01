<?php

$nilai1=21;
$nilai2=13;

echo "Nilai awal:";
echo "\nNilai 1 = $nilai1";
echo "\nNilai 2 = $nilai2";

function swap(&$i,&$j){
$temp=0;
$temp=$i;
$i=$j;
$j=$temp;
}

echo "\n\nNilai setelah diswap:";
swap($nilai1,$nilai2);
echo "\nNilai 1 = $nilai1";
echo "\nNilai 2 = $nilai2";

?>