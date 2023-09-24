<?php
$a = [-98,54,-52,15,23,-97,12,-64,52,85];
//$a = [74,9,51,75,0,35,89,96,77];
$maxEven = 0;
$minOdd = $a[9];
echo $minOdd;
for($i=0;$i<count($a); $i++){
    if($a[$i] % 2 == 0){
        if($maxEven < $a[$i]){
         $maxEven = $a[$i];   
        }
    }
}
    for($i=0;$i<count($a); $i++){
    if($a[$i] % 2 != 0){
        if($minOdd > $a[$i]){
         $minOdd = $a[$i];   
        }
    }
}
print_r("maxEven = ".$maxEven ." mindd = " . $minOdd. ' ans = ' .$maxEven - $minOdd);

