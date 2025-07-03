<?php
	echo "<div id='content' style='padding: 0px 0px 0px 30px;'>";
	echo "<b>Name:</b> $firstName $middleName $lastName <br>";
	echo "<b>Student Number: </b>" . STUDENT_NUMBER . "<br><br>";
	echo "Hello World!!" . " " . "This is the first time I am using PHP!! <br>";
	echo "Today is " . date("Y/m/d"), "<br>";
	echo "The current time is " . date("H:m:s"), "pm<br>";
	echo "Yesterday was " . date("Y-m-d", strtotime("yesterday")), "<br>";
	echo "Last Friday was " . date("Y-m-d", strtotime("last Friday")), "<br>";
	echo "Minimum value of (0, 150, -50, 100, -150) is " . min(0, 150, -50, 100, -150), "<br>";
	echo "Maximum value of (0, 150, -50, 100, -150) is " . max(0, 150, -50, 100, -150), "<br>";
	echo "The area of the circle (with radius 5 cm) is: " . number_format((pi()*pow(5, 2)), 2), "<br>";
	echo "</div>";
?>