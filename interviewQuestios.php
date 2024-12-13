<?php
// Binary Search Function
function binarysearch($array, $target, $startPoint, $endPoint){
    while ($startPoint <= $endPoint) {
        $middle = floor(($startPoint + $endPoint) / 2);

        if ($array[$middle] == $target) {
            return $middle;
        }
        if ($array[$middle] < $target) {
            $startPoint = $middle + 1;
        } else {
            $endPoint = $middle - 1;
        }
    }
    return $startPoint;
}

// Binary Sort Function
function binarySort(&$array) {
    $n = count($array);

    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;
        $position = binarysearch($array, $key, 0, $j);

        while ($j >= $position) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
}

// Example Usage of Binary Sort
$paramArray = [4, 5, 9, 6, 3];
binarySort($paramArray);
echo '<pre>'; print_r($paramArray);
?>

<?php
// Rotate Matrix 90 Degrees Anti-clockwise
function trun90DegreeAntiClockwise($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);

    $tp = [];
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $tp[$i][$j] = $matrix[$j][$i];
        }
    }
    return array_reverse($tp);
}

// Example Usage of Matrix Rotation
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$trunMatrix90 = trun90DegreeAntiClockwise($matrix);

foreach ($trunMatrix90 as $key) {
    echo implode(" ", $key) . "<br>";
}
?>

<?php
// Minimum Edit Distance Function
function editRequired($str1, $str2) {
    $strLen1 = strlen($str1);
    $strLen2 = strlen($str2);
    $dp = array_fill(0, $strLen1 + 1, array_fill(0, $strLen2 + 1, 0));

    for ($i = 0; $i <= $strLen1; $i++) {
        for ($j = 0; $j <= $strLen2; $j++) {
            if ($i == 0) {
                $dp[$i][$j] = $j;
            } elseif ($j == 0) {
                $dp[$i][$j] = $i;
            } elseif ($str1[$i - 1] == $str2[$j - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1];
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

// Example Usage of Minimum Edit Distance
$str1 = 'geek';
$str2 = 'gesek';

echo "Minimum edit requires to convert {$str1} to {$str2} is : " . editRequired($str1, $str2) . "<br>";

$str1 = 'cat';
$str2 = 'cut';

echo "Minimum edit requires to convert {$str1} to {$str2} is : " . editRequired($str1, $str2) . "<br>";
?>
