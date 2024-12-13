<?php
// Binary Search Function: Performs binary search on a sorted array to find the target element
function binarysearch($array, $target, $startPoint, $endPoint){
    while ($startPoint <= $endPoint) {
        $middle = floor(($startPoint + $endPoint) / 2); // Calculate the middle element
        if ($array[$middle] == $target) {
            return $middle + 1; // Return position (1-based index) if found
        } elseif ($array[$middle] < $target) {
            $startPoint = $middle + 1; // Adjust search range to the right half
        } else {
            $endPoint = $middle - 1; // Adjust search range to the left half
        }
    }
    return $startPoint; // Return position if target is not found
}

// Binary Sort Function: Sorts an array using binary search for inserting elements
function binarySort($array){
    $n = count($array); // Get number of elements in array
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i]; // Get current element
        $j = $i - 1;
        $position = binarysearch($array, $key, 0, $j); // Find correct position using binary search
        
        // Shift elements to the right to make space for the key
        while ($j >= $position) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key; // Insert the key at its correct position
    }
}

// Example array
$paramArray = [4, 5, 9, 6, 3];

// Sort the array using PHP's built-in sort and then binary sort it
sort($paramArray); // Sort array first (it will be ascending)
binarySort($paramArray); // Apply binary sort for custom sorting logic

// Output the sorted array
echo '<pre>';
print_r($paramArray); 
// Output will be: 
// Array
// (
//     [0] => 3
//     [1] => 4
//     [2] => 5
//     [3] => 6
//     [4] => 9
// )
?>

<?php
// Matrix Rotation Function: Rotates a matrix 90 degrees anti-clockwise
function trun90DegreeAntiClockwise($matrix){
    $rows = count($matrix); // Get number of rows in matrix
    $cols = count($matrix[0]); // Get number of columns in matrix

    $tp = []; // Temporary array to hold rotated matrix
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $tp[$i][$j] = $matrix[$j][$i]; // Transpose the matrix
        }
    }
    return array_reverse($tp); // Reverse the transposed matrix to rotate 90 degrees
}

// Example matrix to be rotated
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Apply 90-degree anti-clockwise rotation
$trunMatrix90 = trun90DegreeAntiClockwise($matrix);

// Output the rotated matrix
foreach ($trunMatrix90 as $key) {
    echo implode("", $key) . "<br>";
}

// Output will be:
// 3 6 9
// 2 5 8
// 1 4 7
?>

<?php
// Edit Distance Function: Calculates minimum edits required to transform one string to another
function editRequired($str1, $str2){
    $strLen1 = strlen($str1); // Get length of first string
    $strLen2 = strlen($str2); // Get length of second string
    $dp = array_fill(0, $strLen1 + 1, array_fill(0, $strLen2 + 1, 0)); // Initialize DP table

    // Fill DP table with edit distances
    for ($i = 0; $i <= $strLen1; $i++) {
        for ($j = 0; $j <= $strLen2; $j++) {
            if ($i == 0) {
                $dp[$i][$j] = $j; // Insertions needed for first string
            } elseif ($j == 0) {
                $dp[$i][$j] = $i; // Deletions needed for second string
            } elseif ($str1[$i - 1] == $str2[$j - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1]; // No edit if characters are the same
            } else {
                $dp[$i][$j] = 1 + min(
                    $dp[$i - 1][$j], // Deletion
                    $dp[$i][$j - 1], // Insertion
                    $dp[$i - 1][$j - 1] // Substitution
                );
            }
        }
    }
    return $dp[$strLen1][$strLen2]; // Return minimum edit distance
}

// Example strings to find minimum edit distance
$str1 = 'geek';
$str2 = 'gesek';

// Output the minimum edit distance
echo "Minimum edit requires to convert {$str1} to {$str2} is : " . editRequired($str1, $str2) . "<br>";

// Example with different strings
$str1 = 'cat';
$str2 = 'cut';

// Output the minimum edit distance
echo "Minimum edit requires to convert {$str1} to {$str2} " . editRequired($str1, $str2);

// Output will be:
// Minimum edit requires to convert geek to gesek is : 1
// Minimum edit requires to convert cat to cut is 1
?>



<?php
for ($i = 1; $i < 5; $i++) {
    echo $i . ' ';
    $n = $i;
    for ($j = 1; $j < 3; $j++) {
        $n  = $n + 4;
        echo $n, ' ';
        $n = $n;
    }
    echo "\n";
}
/*
Output:
1 5 9 
2 6 10 
3 7 11 
4 8 12 
*/

// star pattern
function pypart($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}
$n = 5;
pypart($n);
/*
Output:
* 
* * 
* * * 
* * * * 
* * * * * 
*/

// PHP code to demonstrate
// star pattern
function pypart2($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= ($n - $i)) {
                echo " " . " ";
            } else {
                echo "* ";
            }
        }
        echo PHP_EOL;
    }
}
$n = 5;
pypart2($n);
/*
Output:
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
*/

// PHP code to demonstrate
// star pattern for triangle

function triangle($n)
{

    $k = 2 * $n - 2;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $k; $j++)
            echo " ";

        $k = $k - 1;

        for ($j = 0; $j <= $i; $j++) {

            echo "* ";
        }

        echo "\n";
    }
}
$n = 5;
triangle($n);
/*
Output:
    * 
   * * 
  * * * 
 * * * * 
* * * * * 
*/
// code
// PHP code to demonstrate
// star pattern 2

// Function to demonstrate 
// printing pattern 2
function triangle_pattern($len)
{
    $string = "*";
    $pyramid_str = "";
    $mid_point = ceil($len / 2);
    for ($i = 1; $i <= $mid_point; $i++) {
        for ($j = 1; $j <= $i; ++$j) {
            $pyramid_str .= $string . " ";
        }
        $pyramid_str .= "\r\n";
    }

    for ($i = $mid_point; $i >= 1; $i--) {
        for ($j = 1; $j < $i; ++$j) {
            $pyramid_str .= $string . " ";
        }
        $pyramid_str .= "\r\n";
    }

    return $pyramid_str;
}
echo triangle_pattern(9);
/*
Output:
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * 
* * * 
* * 
* 
*/

// PHP code to demonstrate 
// printing pattern of numbers

function numpat($n)
{
    $num = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
        }
        $num = $num + 1;
        echo "\n";
    }
}
$n = 5;
numpat($n);
/*
Output:
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 
*/

// PHP code to demonstrate 
// printing pattern of numbers

function numpat1($n)
{

    $num = 1;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
            $num = $num + 1;
        }
        echo "\n";
    }
}
$n = 5;
numpat1($n);
/*
Output:
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
*/

// PHP code to demonstrate printing
// pattern of alphabets

// Function to demonstrate 
// printing pattern
function alphapat($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
        }
        $num = $num + 1;
        echo "\n";
    }
}
$n = 5;
alphapat($n);

/*
Output:
A 
B B 
C C C 
D D D D 
E E E E E 
*/

// PHP code to demonstrate printing
// pattern of alphabets

// Function to demonstrate
// printing pattern
function contalpha($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
            $num = $num + 1;
        }
        echo "\n";
    }
}
$n = 5;
contalpha($n);
