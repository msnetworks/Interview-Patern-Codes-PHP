Here's the updated **README.md** with the additional pattern:

```markdown
# Patterns in PHP

This repository demonstrates the creation of various patterns using loops in PHP. Below is a detailed description of the patterns included and their outputs.

---

## Table of Contents

1. [Number Patterns](#number-patterns)
    - [Incrementing Numbers](#incrementing-numbers)
    - [Incrementing Numbers with Continued Sequence](#incrementing-numbers-with-continued-sequence)
    - [Number Sequence Pattern](#number-sequence-pattern)
2. [Star Patterns](#star-patterns)
    - [Right-Angled Triangle](#right-angled-triangle)
    - [Right-Angled Triangle (Mirrored)](#right-angled-triangle-mirrored)
    - [Pyramid](#pyramid)
    - [Diamond](#diamond)
3. [Alphabet Patterns](#alphabet-patterns)
    - [Repeating Alphabets](#repeating-alphabets)
    - [Continuous Alphabets](#continuous-alphabets)

---

## Number Patterns

### Incrementing Numbers
```php
function numpat($n)
{
    $num = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
        }
        $num = $num + 1;
        echo "\\n";
    }
}
numpat(5);
```
**Output:**
```
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 
```

### Incrementing Numbers with Continued Sequence
```php
function numpat1($n)
{
    $num = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
            $num = $num + 1;
        }
        echo "\\n";
    }
}
numpat1(5);
```
**Output:**
```
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
```

### Number Sequence Pattern
```php
for ($i = 1; $i < 5; $i++) {
    echo $i . ' ';
    $n = $i;
    for ($j = 1; $j < 3; $j++) {
        $n  = $n + 4;
        echo $n, ' ';
    }
    echo "\\n";
}
```
**Output:**
```
1 5 9 
2 6 10 
3 7 11 
4 8 12 
```

---

## Star Patterns

### Right-Angled Triangle
```php
function pypart($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\\n";
    }
}
pypart(5);
```
**Output:**
```
* 
* * 
* * * 
* * * * 
* * * * * 
```

### Right-Angled Triangle (Mirrored)
```php
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
        echo "\\n";
    }
}
pypart2(5);
```
**Output:**
```
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
```

### Pyramid
```php
function triangle($n)
{
    $k = 2 * $n - 2;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $k; $j++) echo " ";
        $k--;
        for ($j = 0; $j <= $i; $j++) echo "* ";
        echo "\\n";
    }
}
triangle(5);
```
**Output:**
```
        * 
       * * 
      * * * 
     * * * * 
    * * * * * 
```

### Diamond
```php
function triangle_pattern($len)
{
    $string = "*";
    $pyramid_str = "";
    $mid_point = ceil($len / 2);
    for ($i = 1; $i <= $mid_point; $i++) {
        for ($j = 1; $j <= $i; ++$j) {
            $pyramid_str .= $string . " ";
        }
        $pyramid_str .= "\\n";
    }
    for ($i = $mid_point; $i >= 1; $i--) {
        for ($j = 1; $j < $i; ++$j) {
            $pyramid_str .= $string . " ";
        }
        $pyramid_str .= "\\n";
    }
    return $pyramid_str;
}
echo triangle_pattern(9);
```
**Output:**
```
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * 
* * * 
* * 
* 
```

---

## Alphabet Patterns

### Repeating Alphabets
```php
function alphapat($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
        }
        $num++;
        echo "\\n";
    }
}
alphapat(5);
```
**Output:**
```
A 
B B 
C C C 
D D D D 
E E E E E 
```

### Continuous Alphabets
```php
function contalpha($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
            $num++;
        }
        echo "\\n";
    }
}
contalpha(5);
```
**Output:**
```
A 
B C 
D E F 
G H I J 
K L M N O 
```

---

## How to Run the Code

1. Copy the code snippets into a PHP file (e.g., `patterns.php`).
2. Run the file using a local server (e.g., **XAMPP**, **WAMP**) or the PHP CLI:
   ```bash
   php patterns.php
   ```

---

## Contributions

Feel free to contribute to this repository by adding new patterns or improving the existing ones. Create a pull request with your changes.

---


# PHP Programs README

## Overview
This repository contains three separate PHP programs demonstrating key algorithms and operations:

1. **Binary Search and Binary Sort**
2. **Matrix Rotation (90 Degrees Anti-clockwise)**
3. **Minimum Edit Distance**

Each program is independent and showcases a unique functionality.

---

## Programs

### 1. Binary Search and Binary Sort

#### Description:
- **Binary Search:** Searches for the correct position of an element in a sorted array.
- **Binary Sort:** Uses binary search to efficiently sort an array by finding the position of each element.

#### Example Usage:
```php
$paramArray = [4, 5, 9, 6, 3];
binarySort($paramArray);
echo '<pre>'; print_r($paramArray);
```

#### Output:
```
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
    [3] => 6
    [4] => 9
)
```

---

### 2. Matrix Rotation (90 Degrees Anti-clockwise)

#### Description:
- Rotates a 2D matrix 90 degrees anti-clockwise by transposing and reversing rows.

#### Example Usage:
```php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$trunMatrix90 = trun90DegreeAntiClockwise($matrix);

foreach ($trunMatrix90 as $key) {
    echo implode(" ", $key) . "<br>";
}
```

#### Output:
```
3 6 9
2 5 8
1 4 7
```

---

### 3. Minimum Edit Distance

#### Description:
Calculates the minimum number of operations (insert, delete, replace) required to convert one string into another using dynamic programming.

#### Example Usage:
```php
$str1 = 'geek';
$str2 = 'gesek';
echo "Minimum edit requires to convert {$str1} to {$str2} is : " . editRequired($str1, $str2) . "<br>";

$str1 = 'cat';
$str2 = 'cut';
echo "Minimum edit requires to convert {$str1} to {$str2} is : " . editRequired($str1, $str2) . "<br>";
```

#### Output:
```
Minimum edit requires to convert geek to gesek is : 1
Minimum edit requires to convert cat to cut is : 1
```

---

## How to Run
1. Save the code in separate PHP files or as a single PHP script.
2. Run the script using a local PHP server or command line:
   ```bash
   php your_file_name.php
   ```
3. Observe the output for each program.

---

## Requirements
- PHP 7.0 or higher

---

## License
This project is open-source and available under the MIT License.


