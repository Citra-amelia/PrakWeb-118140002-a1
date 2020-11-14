<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Amelia 118140002 Cluster A1 WEB RA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php 
	
	
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid" , "kifuat" , "lorem" , "ipsum" , "dolor");


	echo "Data sebelum diubah : <br>";
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";

	echo "Data diurutkan dari Huruf A-Z : <br>";
	sort($data);
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";

	echo "Data diurutkan dari Huruf Z-A : <br>";
	rsort($data);
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}
 ?>

</body>
</html>