<?php

$Names = array("Justin", "Steve", "John");
$Devices = array('printerBrand' => "HP", 'monitorBrand' => "Dell");

// access information at the number index
echo $Names[0] . "<br />";
echo $Names[2] . "<br />";

echo "<br />";

// access information at the named index
echo "printerBrand is ".$Devices['printerBrand']."<br />";
echo "monitorBrand is ".$Devices['monitorBrand']."<br />";

echo "<br /><br />";

// simple foreach
foreach($Names as $key => $name)
{
    echo "\$Names array has the key $key and the corresponding value $name<br />";
}

echo "<br /><br />";

// print_r example

print_r($Names);

echo "<br /><br />";

print_r($Devices);

?>