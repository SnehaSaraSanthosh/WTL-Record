<!DOCTYPE html>
<html>
       <h2> Power of Numbers</h2>
</html>
<?php

function power($a, $b=2) {

    if ($b == 2) {
    
        return $a * $a;
    }

    $value = 1;

    for ($i = 0; $i < $b; $i++) {
    
        $value *= $a;
    }
    
    return $value;
}

$v1 = power(5);
$v2 = power(5, 4);

echo "5^2 is $v1 \n";
echo"<br>";
echo "5^4 is $v2 \n";
?>