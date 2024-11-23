# Interview-Patern-Codes-PHP
Patterns in PHP
This repository demonstrates the creation of various patterns using loops in PHP. Below is a detailed description of the patterns included and the output for each one.

Table of Contents
Number Patterns
Incrementing Numbers
Incrementing Numbers with Continued Sequence
Star Patterns
Right-Angled Triangle
Right-Angled Triangle (Mirrored)
Pyramid
Diamond
Alphabet Patterns
Repeating Alphabets
Continuous Alphabets
1. Number Patterns
Pattern 1: Incrementing Numbers
php
Copy code
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
numpat(5);
Output:

Copy code
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 
Pattern 2: Incrementing Numbers with Continuity
php
Copy code
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
numpat1(5);
Output:

Copy code
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
2. Star Patterns
Pattern 1: Right-Angled Triangle
php
Copy code
function pypart($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}
pypart(5);
Output:

markdown
Copy code
* 
* * 
* * * 
* * * * 
* * * * * 
Pattern 2: Right-Angled Triangle (Mirrored)
php
Copy code
function pypart2($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= ($n - $i)) {
                echo "  ";
            } else {
                echo "* ";
            }
        }
        echo "\n";
    }
}
pypart2(5);
Output:

markdown
Copy code
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
Pattern 3: Pyramid
php
Copy code
function triangle($n)
{
    $k = 2 * $n - 2;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $k; $j++) echo " ";
        $k--;
        for ($j = 0; $j <= $i; $j++) echo "* ";
        echo "\n";
    }
}
triangle(5);
Output:

markdown
Copy code
        * 
       * * 
      * * * 
     * * * * 
    * * * * * 
Pattern 4: Diamond
php
Copy code
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
Output:

markdown
Copy code
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * 
* * * 
* * 
* 
3. Alphabet Patterns
Pattern 1: Repeating Alphabets
php
Copy code
function alphapat($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
        }
        $num++;
        echo "\n";
    }
}
alphapat(5);
Output:

mathematica
Copy code
A 
B B 
C C C 
D D D D 
E E E E E 
Pattern 2: Continuous Alphabets
php
Copy code
function contalpha($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
            $num++;
        }
        echo "\n";
    }
}
contalpha(5);
Output:

mathematica
Copy code
A 
B C 
D E F 
G H I J 
K L M N O 
How to Run the Code
Copy the code into a PHP file (e.g., patterns.php).
Execute it using a local server setup such as XAMPP or WAMP, or directly using the PHP CLI:
bash
Copy code
php patterns.php
Contributions
Feel free to fork this repository, improve the patterns, or add new ones. Submit a pull request with your updates!

License
This project is open-source and available under the MIT License.
