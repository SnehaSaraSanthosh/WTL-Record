<!DOCTYPE html>
<html>
       <h2> Alphabet Pattern</h2>
</html>
<?php
$alpha = range('S', 'Z');  
for($i=0; $i<7; $i++){   
  for($j=7; $j>$i; $j--){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
?> 