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

