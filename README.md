Below is a sample `README.md` format that you can use for each program in your `index.php`. Each section contains a description of the functionality, sample output, and a brief explanation of how the code works.

---

# README for PHP Programs

This repository contains several PHP programs that perform various operations, such as binary search, matrix rotation, string manipulation, and various pattern printing. Below is a description of each program along with its functionality and expected output.

---

## Program 1: Binary Search and Binary Sort

### Functionality:
- This program demonstrates binary search and binary sort.
- **Binary Search** finds the index of a target element in a sorted array.
- **Binary Sort** sorts an array using binary search to find the correct insertion position.

### Code:

```php
function binarysearch($array, $target, $startPoint, $endPoint) {
    // Binary Search implementation
}

function binarySort($array) {
    // Binary Sort implementation
}

$paramArray = [4, 5, 9, 6, 3];
sort($paramArray); // Sorting using PHP's built-in sort
binarySort($paramArray); // Apply custom binary sort
print_r($paramArray);
```

### Output:
```php
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

## Program 2: 90 Degree Anti-Clockwise Matrix Rotation

### Functionality:
- This program rotates a matrix 90 degrees anti-clockwise.
- It transposes the matrix and then reverses the rows to achieve the rotation.

### Code:

```php
function trun90DegreeAntiClockwise($matrix) {
    // 90 Degree Anti-Clockwise Rotation implementation
}

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$trunMatrix90 = trun90DegreeAntiClockwise($matrix);
foreach($trunMatrix90 as $key) {
    echo implode("", $key)."<br>";
}
```

### Output:
```
3 6 9
2 5 8
1 4 7
```

---

## Program 3: Minimum Edit Distance Between Two Strings

### Functionality:
- This program calculates the minimum number of edits (insertions, deletions, or substitutions) required to convert one string into another using dynamic programming.

### Code:

```php
function editRequired($str1, $str2) {
    // Edit Distance calculation implementation
}

$str1 = 'geek';
$str2 = 'gesek';
echo "Minimum edit requires to convert {$str1} to {$str2} is : ".editRequired($str1, $str2)."<br>";
```

### Output:
```php
Minimum edit requires to convert geek to gesek is : 1
Minimum edit requires to convert cat to cut is 1
```

---

## Program 4: Number Pattern

### Functionality:
- This program generates a number pattern where each row contains a series of numbers repeated for that row.

### Code:

```php
function numpat($n) {
    // Number pattern implementation
}

$n = 5;
numpat($n);
```

### Output:
```
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 
```

---

## Program 5: Continuous Number Pattern

### Functionality:
- This program generates a number pattern where the numbers continuously increment across all rows.

### Code:

```php
function numpat1($n) {
    // Continuous number pattern implementation
}

$n = 5;
numpat1($n);
```

### Output:
```
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
```

---

## Program 6: Alphabet Pattern (Repeated)

### Functionality:
- This program generates a pattern where each row consists of the same alphabet repeated multiple times. The starting alphabet is `A` and increments across rows.

### Code:

```php
function alphapat($n) {
    // Alphabet pattern implementation
}

$n = 5;
alphapat($n);
```

### Output:
```
A 
B B 
C C C 
D D D D 
E E E E E 
```

---

## Program 7: Continuous Alphabet Pattern

### Functionality:
- This program generates a pattern where each row contains a continuous sequence of alphabets starting from `A`.

### Code:

```php
function contalpha($n) {
    // Continuous alphabet pattern implementation
}

$n = 5;
contalpha($n);
```

### Output:
```
A 
B C 
D E F 
G H I J 
K L M N O 
```

---

## Program 8: Star Pattern (Right Triangle)

### Functionality:
- This program generates a star pattern forming a right-angled triangle.

### Code:

```php
function pypart($n) {
    // Star pattern for right triangle
}

$n = 5;
pypart($n);
```

### Output:
```
* 
* * 
* * * 
* * * * 
* * * * * 
```

---

## Program 9: Inverted Star Pattern

### Functionality:
- This program generates an inverted star pattern, where each row starts with spaces, followed by stars forming an inverted triangle.

### Code:

```php
function pypart2($n) {
    // Inverted star pattern
}

$n = 5;
pypart2($n);
```

### Output:
```
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
```

---

## Program 10: Star Pattern (Centered Triangle)

### Functionality:
- This program generates a centered star triangle pattern with stars aligned in the center.

### Code:

```php
function triangle($n) {
    // Centered triangle star pattern
}

$n = 5;
triangle($n);
```

### Output:
```
    * 
   * * 
  * * * 
 * * * * 
* * * * * 
```

---

## Program 11: Pyramid Star Pattern

### Functionality:
- This program generates a pyramid star pattern where the number of stars increases until the midpoint, then decreases.

### Code:

```php
function triangle_pattern($len) {
    // Pyramid star pattern implementation
}

echo triangle_pattern(9);
```

### Output:
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

## Program 12: Number Pattern (Row-Based)

### Functionality:
- This program generates a number pattern where each row contains the same number repeated multiple times.

### Code:

```php
function numpat($n) {
    // Number pattern (row-based) implementation
}

$n = 5;
numpat($n);
```

### Output:
```
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 
```

---

## Program 13: Continuous Number Pattern

### Functionality:
- This program generates a continuous number pattern where the numbers increase across all rows.

### Code:

```php
function numpat1($n) {
    // Continuous number pattern implementation
}

$n = 5;
numpat1($n);
```

### Output:
```
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
```

---

## License

Feel free to modify and use the code in your own projects. The code is free to use under the [MIT License](https://opensource.org/licenses/MIT).

---

### Instructions to Run:
1. Place the code in a PHP environment (like XAMPP, LAMP, etc.).
2. Open the `index.php` file in your browser.

