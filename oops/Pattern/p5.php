<?php
// Webkul set 19 
/**
 * The pattern must be dyanamic. It should be any odd number(Excluding 1 and any negative number)
 * n>=3
 */
/**
 * @author chandan singh
 */
$n = 9; //input no
$length = $n+2;  //length of the row
for($i = 0; $i<$length;$i++){   // outer loop to create row
    for($j=0; $j<$length; $j++){  // inner loop to create column
        if($i<$length-1 && $j==0){  // condition for print "e" only for 0 column no
            echo "e";
        }
        if($i == $length-1 && $j<$length){  // condition for  print "e" last row 
            echo "e";
        }
    }
    echo "\n";
}
// now again need to print famus pyramid pattern diffenet only care the row value 
/**
 * calculate the row lenth and print the space and @
 */
for($i=1;$i<=$n; $i++){
    for($j=$length-$i;$j>=1; $j--){
        echo " ";
    }
    for($j=1;$j<=$i; $j++){
        echo "@";
    }
    echo "\n";
}
//  Thanks
