<?php
for ($i = 1; $i < 5; $i++) {
    echo $i . ' '; // Output current value of $i in the outer loop
    $n = $i;
    for ($j = 1; $j < 3; $j++) {
        $n  = $n + 4;
        echo $n , ' '; // Add 4 to $i and output it in the inner loop
        $n = $n;
    }
    echo "\n";
}
?>
