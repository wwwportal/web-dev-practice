<html>
<head>
    <title>Lab 7</title>
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

    echo "<h3> No Key Array </h3>";
    $noKeyArray = array(10, 20, 30, 40);

    echo "<h5> Var Dump </h5>";
    var_dump($noKeyArray);

    echo "<h5> For Each </h5>";
    foreach($noKeyArray as $key => $value) {
        $type = gettype($key);
        echo "Key: $key, Value: $value, Key Data Type: $type  <br>";
    }

    echo "<br> <h3> String Key Array </h3>";
    $stringKeyArray = array(
        'key1' => "item1",
        'key2' => "item2"
        );

    echo "<h5> Var Dump </h5>";
    var_dump($stringKeyArray);

    echo "<h5> For Each </h5>";
    foreach($stringKeyArray as $key => $value) {
        $type = gettype($key);
        echo "Key: $key, Value: $value, Key Data Type: $type <br>";
    }

    echo "<br> <h3> Integer Key Array </h3>";
    $intKeyArray = array(
        0 => "item1",
        1 => "item2",
        3 => "item3"
        );

    echo "<h5> Var Dump </h5>";
    var_dump($intKeyArray);

    echo "<h5> For Each </h5>";
    foreach($intKeyArray as $key => $value) {
        $type = gettype($key);
        echo "Key: $key, Value: $value, Key Data Type: $type <br>";
    }

    echo "<br> <h3> Mixed-Key Array </h3>";
    $mixedKeyArray = array(
        'key1' => "item1",
        'key2' => "item2",
        2 => "item8",
        4 => "item4",
        5 => "item5",
        3 => "item6",
        1 => "item7"
        );

    echo "<h5> Var Dump </h5>";
    var_dump($mixedKeyArray);

    echo "<h5> For Each </h5>";
    foreach($mixedKeyArray as $key => $value) {
        $type = gettype($key);
        echo "Key: $key, Value: $value, Key Data Type: $type <br>";
    }

    echo "<br> <h3> Multi-Dimensional Array </h3>";
    $array1 = array(10, 20);
    $array2 = array(30, 40);
    $multiDimensionalArray = array($array1, $array2);

    echo "<h5> Var Dump </h5>";
    var_dump($multiDimensionalArray);

    echo "<h5> For Each </h5>";
    foreach($multiDimensionalArray as $key1 => $value1) {
        echo "Level 1 key: " . $key1 . "<br>";
        foreach($value1 as $key2 => $value2) {
        $type = gettype($key2);
            echo "Level2 Key: $key2, Value: $value2, Key Data Type: $type <br>";

        }
    }

    echo "</div>";
    include_once "Footer.php";
    ?>
</body>
</html>
