<?php
  $filename = "paintings.txt";
?>

<html>
<head><title>text reading</title></head>
<body>
<h1>Begin reading file <?php echo $filename; ?></h1>
<?php
define("DELIMITER", "~");  
$arr = file($filename) or die('ERROR: Cannot find file');
$i=0;
$paintings = array();
 foreach ($arr as $line) {
	echo "Displaying info for Painting: ". $i . "<br/>";
	$splitcontents = explode(DELIMITER, $line);
		
		$id = $splitcontents[0];
		$artist = $splitcontents[1];
		$title = $splitcontents[2];
		$year = $splitcontents[3];
		$width = $splitcontents[4];
		$height = $splitcontents[5];
		$price = $splitcontents[6];
		$description = $splitcontents[7];	
		$wikiUrl = $splitcontents[8];
		$genre = trim($splitcontents[9]);
	
	echo "id:" . $id. "<br/>";
	echo "artist:" . $artist. "<br/>";
	echo "title:" . $title. "<br/>";
	echo "year:" . $year. "<br/>";
	echo "width:" . $width. "<br/>";
	echo "height:" . $height. "<br/>";
	echo "price:" . $price. "<br/>";
	echo "description:" . $description. "<br/>";
	echo "wikiUrl:" . $wikiUrl. "<br/>";
	echo "genre:" . $genre. "<br/>";	
	echo "<br/>";

    $paintings[] = array ($id, $artist, $title, $year, $width, $height,$price, $description, $wikiUrl, $genre);	
	$i=$i+1;
 }
 var_dump($paintings);

?>
<h2>All done reading</h2>
</body>
</html>