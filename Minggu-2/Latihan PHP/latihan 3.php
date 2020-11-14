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

echo "<h1>Pengurutan Bilangan Prima 1-50</h1>";
echo "<h3>";

for ($i=1;$i<=50;$i++){
    $a=0;
    for ($j=1;$j<=$i;$j++){
        if($i%$j==0){
            $a++;
        }
    }
    if($a==2){
        echo $i." ";
    }
}
echo "</h3>";
?>

</body>
</html>