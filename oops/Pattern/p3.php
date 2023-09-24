<?php
// One hundred people are standing in a circle in an order 1 to 100.
// No.1 has a sword. He kills the next person (i.e., no. 2) and gives the sword to the next (i.e., no. 3).
// All person does the same until only one survives.
// Which number survives at last?
$d1 =[];
for($i = 1; $i<=100; $i++){
    $d1[] = $i;
}
$d2 = '';
for($i=0;$i<count($d1); $i++){
   
    if($d1[$i] == 1){
        $d2 = $d1[$i];
    } 
    if($d1[$i]%2 != 0){
        $d2 = $d1[$i];
    }
}