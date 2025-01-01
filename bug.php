```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    $value = $value * 2; 
  }
}

$myArray = [1, 2, 3, 4, 5];
processArray($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 ) 

$myArray = [1, 2, 3, 4, 5];
$myArray2 = &$myArray; // Assign by reference
processArray($myArray2);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

//The bug
function modifyArray(array $arr) {
    foreach ($arr as $key => $value) {
        $arr[$key] = $value * 2; 
    }
}

$myArray = [1,2,3,4,5];
modifyArray($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

$myArray = [1, 2, 3, 4, 5];
$myArray2 = $myArray; // Assign by value
modifyArray($myArray2);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) //Buggy
```