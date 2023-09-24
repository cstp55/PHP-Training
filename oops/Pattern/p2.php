<?php
//print vowells
$a ="chandan";
 $vowels = [];
 $strLength = strlen($a);
 for($i=0; $i<$strLength; $i++){
     if($a[$i] == 'a'){
         $vowels[] = $a[$i];
     }elseif($a[$i] == 'e'){
          $vowels[] = $a[$i];
     }elseif($a[$i] == 'i'){
          $vowels[] = $a[$i];
     }elseif($a[$i] == 'o'){
          $vowels[] = $a[$i];
     }elseif($a[$i] == 'u'){
          $vowels[] = $a[$i];
     }
 }
 echo implode('',$vowels);

 //2nd method using In_array() function
 $vowels = array('a','e','i','o','u'); 
 ?>