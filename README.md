# PHP Programs README

## Overview
This repository contains multiple PHP programs, demonstrating algorithms and pattern generation using loops.

Programs include:

1. **Binary Search and Binary Sort**
2. **Matrix Rotation (90 Degrees Anti-clockwise)**
3. **Minimum Edit Distance**
4. **Pattern Generators**

Each program showcases unique functionality and is designed to be modular and reusable.

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

### 4. Pattern Generators

#### Number Patterns:

##### Incrementing Numbers
```php
function numpat($n) {
    $num = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
        }
        $num++;
        echo "\n";
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

##### Continuous Numbers:
```php
function numpat1($n) {
    $num = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "\n";
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

#### Star Patterns:

##### Right-Angled Triangle:
```php
function pypart($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
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

##### Pyramid:
```php
function triangle($n) {
    $k = 2 * $n - 2;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $k; $j++) echo " ";
        $k--;
        for ($j = 0; $j <= $i; $j++) echo "* ";
        echo "\n";
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

---

## How to Run
1. Copy the respective code snippets into a PHP file.
2. Run the file using a local PHP server (e.g., **XAMPP**, **WAMP**) or PHP CLI:
   ```bash
   php filename.php
   ```
3. Observe the output.

---

## Requirements
- PHP 7.0 or higher

---

## License
This project is open-source and available under the MIT License.

