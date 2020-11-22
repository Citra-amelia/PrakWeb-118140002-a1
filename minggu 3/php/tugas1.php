<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Amelia 118140002 Cluster A1 WEB RA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h2>Tugas 1</h2>
        
        <form action="" method="post">

        <div class="form-group">
                <label for="">Masukkan Angka :</label>
                <input type="number" class="form-control" name="angka">
        </div>
        <input type="submit" name="cari" value="cari" class="btn btn-primary"/>
        </form>
<?php
	function faktorial($n){
		if($n == 0){
			return 1;
		}else{
			return $n*faktorial($n-1);
		} 
    }
    if(isset($_POST['submit'])){
        $isi = [
            'Angka'          => $_POST['angka'],
            
        ];
    }
?>

<?php
	if(isset($_POST['cari'])){
        $n = ($_POST['angka']);
        echo "Faktorialnya ".$n." adalah : " .faktorial($n);
    }
?>
</body>
</html>