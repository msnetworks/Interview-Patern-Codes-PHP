<?php
function binarysearch($array, $target, $startPoint, $endPoint){
    while($startPoint <= $endPoint){
        $middle = floor(($startPoint + $endPoint)/2);
        if($array[$middle] == $target){
            return $middle + 1;
        }elseif($array[$middle]){

        }
        if($array[$middle] < $target){
            $startPoint = $middle + 1;
        } else{
            $endPoint = $middle - 1;
        }
    }
    return $startPoint;
}

function binarySort($array){
    $n = count($array);

    for($i = 1; $i<$n; $i++){
        $key = $array[$i];
        $j = $i -1;
        $position = binarysearch($array, $key, 0, $j);

        while ($j >= $position){
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1];
    }
}

$paramArray = [4,5,9,6,3];
sort($paramArray);
binarySort($paramArray);
echo '<pre>'; print_r($paramArray);
?>

<?php
function trun90DegreeAntiClockwise($matrix){
    $rows = count($matrix);
    $cols = count($matrix[0]);

    $tp = [];
    for($i = 0; $i < $cols; $i++){
        for($j = 0; $j < $rows; $j++){
            $tp[$i][$j] = $matrix[$j][$i];
        }
    }
    return array_reverse($tp);
}

$matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$trunMatrix90 = trun90DegreeAntiClockwise($matrix);

foreach($trunMatrix90 as $key){
    echo implode("", $key)."<br>";
}
?>

<?php
function editRequired($str1, $str2){
    $strLen1 = strlen($str1);
    $strLen2 = strlen($str2);
    $dp = array_fill(0, $strLen1 + 1, array_fill(0, $strLen2 + 1, 0));
    for($i = 0; $i <= $strLen1; $i++){
        for($j = 0; $j <= $strLen2; $j++){
            if($i == 0){
                $dp[$i][$j] = $j;
            }
            elseif($j == 0){
                $dp[$i][$j] = $i;
            }
            elseif($str1[$i-1] == $str2[$j-1]){
                $dp[$i][$j] == $dp[$i-1][$j-1];
            }
            else{
                $dp[$i][$j] = 1 + min(
                    $dp[$i-1][$j],
                    $dp[$i][$j-1],
                    $dp[$i - 1][$j-1]
                );
            }
        }
    }
    return $dp[$strLen1][$strLen2];
}

$str1 = 'geek';
$str2 = 'gesek';

echo "Minimum edit requires to convert {$str1} to {$str2} is : ".editRequired($str1, $str2)."<br>";

$str1 = 'cat';
$str2 = 'cut';

echo "Minimum edit requires to convert {$str1} to {$str2} ".editRequired($str1, $str2);

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
