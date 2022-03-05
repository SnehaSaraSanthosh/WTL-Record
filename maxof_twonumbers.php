<!DOCTYPE html>
<html>
       <h2> Max Of 2 Numbers</h2>
</html>
<?php
echo"Number 1 = 23";
echo"<br>";
echo"Number 2 = 32";
echo"<br>";
echo"<br>";

function maximum($x, $y) {
    
    if ($x > $y) { 
        
        return $x;
    } else {
        
        return $y;
    }
}

$a = 23;
$b = 32;

$val = maximum($a, $b);
echo "The max of $a and $b is $val \n";
?>
