<?php
function editRequired($str1, $str2) {
    $strLen1 = strlen($str1);
    $strLen2 = strlen($str2);
    $dp = array_fill(0, $strLen1 + 1, array_fill(0, $strLen2 + 1, 0));
    
    for ($i = 0; $i <= $strLen1; $i++) {
        for ($j = 0; $j <= $strLen2; $j++) {
            if ($i == 0) {
                $dp[$i][$j] = $j; // If first string is empty
            } elseif ($j == 0) {
                $dp[$i][$j] = $i; // If second string is empty
            } elseif ($str1[$i - 1] == $str2[$j - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1]; // Characters match
            } else {
                $dp[$i][$j] = 1 + min(
                    $dp[$i - 1][$j],   // Remove
                    $dp[$i][$j - 1],   // Insert
                    $dp[$i - 1][$j - 1] // Replace
                );
            }
        }
    }
    return $dp[$strLen1][$strLen2];
}

$str1 = 'geek';
$str2 = 'gesek';

echo "Minimum edits required to convert '{$str1}' to '{$str2}' is: " . editRequired($str1, $str2) . "\n";

$str1 = 'cat';
$str2 = 'cut';

echo "Minimum edits required to convert '{$str1}' to '{$str2}' is: " . editRequired($str1, $str2) . "\n";
?>
