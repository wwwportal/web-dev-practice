<html>
<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/boostrap.min.js"></script>
</head>
<body style="background-color: #f5ecd9;">

<?php

    include_once "Header.php";
    echo "<div style='margin: 50px 50px 200px 50px'>";

    function isPrime($num){
        
        $prime = true;
        $index = 2;
        while(($index * $index) <= $num && $prime == true) {
            if (($num % $index) == 0) {
                $prime = false;
                echo $num . " is NOT a prime number";
            }
            $index = $index + 1;
        }
        if ($prime == true) {
            echo $num . " is a prime number";
        }

    }

    function isOdd($num) {

        if (($num % 2) == 0) {
            echo $num . " is an even number";
        } else {
            echo $num . " is an odd number";
        }

    }

    function calculation() {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operations'];
        $result;

        switch($operation) {
            case '+':
                $result = $num1 + $num2;
                echo $num1." plus ".$num2." equals ".htmlspecialchars($result)."<br/>";
                break;
            case '-':
                $result = $num1 - $num2;
                echo $num1." minus ".$num2." equals ".htmlspecialchars($result)."<br/>";
                break;
            case 'x':
                $result = $num1 * $num2;
                echo $num1." multiplied by ".$num2." equals ".htmlspecialchars($result)."<br/>";
                break;
            case '/':
                $result = $num1 / $num2;
                echo $num1." plus ".$num2." equals ".htmlspecialchars($result)."<br/>";
                break;
            case 'exp':
                $result = pow($num1, $num2);
                break;
        }
        return $result;
    }
   
    echo "
    <form method='POST'>
        <input type='number' name='num1'/>
        <select name='operations'>
            <option value='+'>+</option>
            <option value='-'>-</option>
            <option value='x'>×</option>
            <option value='/'>/</option>
            <option value='exp'>exp</option>
        </select>
        <input type='number' name='num2'/>
        <input type='submit' class='button' name='='>
    </form>
";

    if(isset($_POST['='])) {
        $result = calculation();
        isPrime($result);
        isOdd($result);
    }

    echo "</div>";
    include_once "Footer.php";

?>
</body>
</html>
