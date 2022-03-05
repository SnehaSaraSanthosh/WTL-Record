<!DOCTYPE html>
<html>
       <h2>Sum Of Digits of a Number</h2>
</html>
<?php 
echo"Number = 12345";
echo"<br>";
echo"<br>";
$num = 12345;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "1+2+3+4+5= $sum";  
 ?>  