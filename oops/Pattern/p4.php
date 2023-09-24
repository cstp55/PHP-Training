<?php 
//function solution($A) {
    $A = [1, 3, 6, 4, 1, 2];
    // write your code in PHP7.4
    $largest = $A[0];
    for($i = 1; $i<count($A); $i++){
        if($largest<$A[$i]){
            $largest = $A[$i];
        }
    }    
    for($i = $largest; $i>0; $i--){
        if(!array_search($i, $A, true)){
            echo $i;
        }
    }
    echo $largest +1;    
//}

?>