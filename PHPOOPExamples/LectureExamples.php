<?php
//Example 1*************************************
echo "Output for Example 1 <br>";
$days = array("Mon","Tue","Wed","Thu","Fri");
unset($days[2]);
unset($days[3]);
print_r($days); // outputs: Array ( [0] => Mon [1] => Tue [4] => Fri )
$days = array_values($days);
echo "<br>";
print_r($days); // outputs: Array ( [0] => Mon [1] => Tue [2] => Fri )
echo "<br>";
echo "<br>";

//Example 2****************************************
echo "Output for Example 2  <br>";
$oddKeys = array (1 => "hello", 3 => "world", 5 => "!");
if (isset($oddKeys[0])) {
    // The code below will never be reached since $oddKeys[0] is not set!
    echo "there is something set for key 0";
}
if (isset($oddKeys[1])) {
    // This code will run since a key/value pair was defined for key 1
    echo "there is something set for key 1, namely ". $oddKeys[1];
    
}
echo "<br>";
echo "<br>";

//Example 3****************************************
echo "Output for Example 3  <br>";
echo <<< EOT
<form method="get">
Please select days of the week you are free.<br />
Monday <input type="checkbox" name="day[]" value="Monday" /> <br />
Tuesday <input type="checkbox" name="day[]" value="Tuesday" /> <br />
Wednesday <input type="checkbox" name="day[]" value="Wednesday" /> <br />
Thursday <input type="checkbox" name="day[]" value="Thursday" /> <br />
Friday <input type="checkbox" name="day[]" value="Friday" /> <br />
<input type="submit" value="Submit">
</form>
EOT;

if (isset($_GET["day"])) {
    echo "You submitted " . count($_GET['day']) . "values: ";
    foreach ($_GET['day'] as $d) {
        echo $d . ", ";
    }
}

echo "<br>";
echo "<br>";


//Example 4****************************************
echo "Output for Example 4  <br>";
$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 52, "Thu" => 40, "Fri" => 37);

// foreach: iterating through the values
foreach ($forecast as $value) {
    echo $value . "<br>";
}

// foreach: iterating through the values AND the keys
foreach ($forecast as $key => $value) {
    echo "day" . $key . "=" . $value;
    echo "<br>";
}
echo "<br>";
echo "<br>";
?>