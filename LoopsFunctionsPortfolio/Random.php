<html>
<head>
  <title>Lab 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
	<body style='background-color: #f5ecd9;'>
		<?php 

        include_once "Header.php";

        $num = 0;
        $i = 0;
        $ten = 0;
        $twenty = 0;
        $thirty = 0;
        $forty = 0;
        $fifty = 0;

        for($i; $i<500; $i++) {
            $num = rand(1, 50);
            if ($num<=10) {
                $ten++;
            } else if ($num<=20) {
                $twenty++;
            } else if ($num<=30) {
                $thirty++;
            } else if ($num<=40) {
                $forty++;
            } else if ($num<=50) {
                $fifty++;
            }
        }
        echo "<div style='margin: 50px 100px 200px 50px'>";
        echo $ten . " numbers are randomly generated in the range between 01 - 10 <br>";
        echo $twenty . " numbers are randomly generated in the range between 11 - 20 <br>";
        echo $thirty . " numbers are randomly generated in the range between 21 - 30 <br>";
        echo $forty . " numbers are randomly generated in the range between 31 - 40 <br>";
        echo $fifty . " numbers are randomly generated in the range between 41 - 50 <br><br>";
        echo "Histogram of stars as percentage of the number of values are displayed below<br>";
        $cent10 = $ten*100/500;
        $stars = printStars($cent10);
        echo "<em>01 - 10:</em>" . $stars . "<br>";
        $cent20 = $twenty*100/500;
        $stars = printStars($cent20);
        echo "<em>11 - 20:</em>" . $stars . "<br>";
        $cent30 = $thirty*100/500;
        $stars = printStars($cent30);
        echo "<em>21 - 30:</em>" . $stars . "<br>";
        $cent40 = $forty*100/500;
        $stars = printStars($cent40);
        echo "<em>31 - 40:</em>" . $stars . "<br>";
        $cent50 = $fifty*100/500;
        $stars = printStars($cent50);
        echo "<em>41 - 50:</em>" . $stars . "<br>";

        function printStars($number){
            $i = 0;
            $stars = "";
            for ($i; $i<$number; $i++) {
                $stars .= "*";
            }
            return $stars;
        }

        echo "</div>";

        include_once "Footer.php";

        ?>
	</body>
</html>