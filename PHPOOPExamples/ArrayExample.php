<?php
/*
 ArrayExample.php

Sub-Task 1:
Create an array, $noKeyArray without specifying any key. Display the keys and the corresponding values of the array using the following command:
var_dump($noKeyArray)
Display the keys, the values and the key data type of the array using the ‘foreach’ loop.

Sub-Task 2: 
Create an array, $stringKeyArray with only string keys. Display the keys and the corresponding values of the array using the following command:
var_dump($stringKeyArray)
Display the keys, the values and the key data type of the array using the ‘foreach’ loop.

Sub-Task 3: 
Create an array, $intKeyArray with only integer keys. Display the keys and the corresponding values of the array using the following command:
var_dump($intKeyArray)
Display the keys, the values and the key data type of the array using the ‘foreach’ loop.

Sub-Task 4: 
Create an array, $mixedKeyArray with both string and integer keys. Display the keys and the corresponding values of the array using the following command:
var_dump($mixedKeyArray)
Display the keys, the values and the key data type of the array using the ‘foreach’ loop.
 
Sub-Task 5:
Create a multi-dimensional (2-D) array, $multiDimensionArray. Display the keys and the corresponding values of the array using the following command:
var_dump($multiDimensionArray)
Display the keys, the values and the key data type of the array using the ‘foreach’ loop.
 */


//Defining arrays
//Array keys can be integers, strings, or both

//No Key Array
$noKeyArray = Array(10, 20, 30, 40);
echo '<h3>No Key Array - Output using var_dump</h3>';
echo var_dump($noKeyArray);
echo '<br>';

echo '<h3>No Key Array - Output using foreach</h3>';
foreach($noKeyArray as $key => $element){
    echo 'key: ' . $key . ', value: ' . $element . ', key data type: ' . gettype($key);
    echo '<br>';
}

//String keys
$stringKeyArray = Array(
    'key1' => 'item1',
    'key2' => 'item2',
    );

echo '<h3>String Key Array - Output using var_dump</h3>';
echo var_dump($stringKeyArray);


echo '<h3>String Key Array - Output using foreach</h3>';
foreach($stringKeyArray as $key => $element){
    echo 'key: ' . $key . ', value: ' . $element . ', key data type: ' . gettype($key);
    echo '<br>';
}

//Integer Keys
$integerKeyArray = Array(
    0 => 'item1',
    1 => 'item2',
    3 => 'item3',
    );

echo '<h3>Integer Key Array - Output using var_dump</h3>';
echo var_dump($integerKeyArray);

echo '<h3>Integer Key Array - Output using foreach</h3>';
foreach($integerKeyArray as $key => $element){
    echo 'key: ' . $key . ', value: ' . $element . ', key data type: ' . gettype($key);
    echo '<br>';
}

//Mixed Keys

$mixedKeyArray = Array(
    'key1' => 'item1',
    'key2' => 'item2',
    2 => 'item3',
    4 => 'item4',
    "5" => 'item5', //String keys containing valid integers will be cast to integer type
    3.14159 => 'item 6', //Keys containing doubles will have the decimal part truncated.
    true => 'item7', //Keys containing boolean will be cast to integer (false=0, true=1)
    1 => 'item8' //A duplicate key will overwrite all previous instances of that key.
    );

echo '<h3>Mixed Key Array- Output using var_dump</h3>';
echo var_dump($mixedKeyArray);

echo '<h3> Mixed Key Array - Output using foreach</h3>';
foreach($mixedKeyArray as $key => $element){
    echo 'key: ' . $key . ', value: ' . $element . ', key data type: ' . gettype($key);
    echo '<br>';
}

//Multidimensional array

$array1 = Array(10, 20);
$array2 = Array(30, 40);
$multiArray = Array($array1, $array2);

echo '<h3>Multi-dimensional Array -Output using var_dump</h3>';
echo var_dump($multiArray);
echo '<h3> Multi-dimensional Array - Output using foreach</h3>';
foreach($multiArray as $key1 => $element1){
    echo 'Level 1 key: '.$key1;
    echo '<br>';
    foreach($element1 as $key2 => $element2){
        echo 'Level 2 key: ' . $key2 . ', value: ' . $element2 . ', key data type: ' . gettype($key2);
        echo '<br>';
    }
}

// Mixed Item Array
$mixedItemArray = Array(
    'key1' => 100,
    'key2' => 'item2',
    'key3' => 200,
    );

echo '<h3>Mixed Item Array - Output using var_dump</h3>';
echo var_dump($mixedItemArray);

echo '<h3>Mixed Item Array - Output using foreach</h3>';
foreach($mixedItemArray as $key => $element){
    echo 'key: ' . $key . ', value: ' . $element . ', Item data type: ' . gettype($element);
    echo '<br>';
}

?>