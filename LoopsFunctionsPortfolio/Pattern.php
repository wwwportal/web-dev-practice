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
	<body style="background-color: #f5ecd9;">
        <?php
        include_once "Header.php";
        echo "<div style='margin: 50px 100px 200px 50px'>";

        $size = 9;
        // one star
        $i;
        $j;
        $stars = "<b>";
        for($i=0;$i<$size;$i++){
            for($j=0;$j<=$i;$j++){
                $stars .= "<b>* </b>";
            }
            echo $stars . "<br>";
            $stars = "";
        }
        for($i=$size-1;$i>0;$i--){
            for($j=$i;$j>0;$j--){
                $stars .= "<b>* </b>";
            }
            echo $stars . "<br>";
            $stars = "";
        }
        echo "</div>";
        include_once "Footer.php";
        ?>
	</body>
</html>