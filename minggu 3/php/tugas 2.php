<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Amelia 118140002 Cluster A1 WEB RA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<body>
<h2>Tugas 2 (warna menggunakan bahasa inggris)</h2>
        
        <form action="" method="post">

            <div class="form-group">
                <label for="">Nama :</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="">warna :</label>
                <input type="text" name="color" class="form-control">
            </div>
        <input type="submit" name="cari" value="cari" class="btn btn-primary"/>
        </form>
<?php
	function bet($nama, $color){
		$panjang = strlen($nama);
		if($panjang > 20 && $color != ""){
			$harga = 700;
			$warna = $color;
		}
		elseif($panjang >= 11 && $color != ""){
			$harga = 500;
			$warna = $color;
		}
		elseif($panjang >=1 && $color != ""){
			$harga = 300;
			$warna = $color;
		}
		elseif($panjang > 20 && $color == ""){
			$harga = 700;
			$color = "red";
			$warna = $color;
		}
		elseif($panjang >= 11 && $color == ""){
			$harga = 500;
			$color = "red";
			$warna = $color;
		}
		elseif($panjang >= 1 && $color == ""){
			$harga = 300;
            $color = "red";
            
			$warna = $color;
		}
		elseif($panjang = 0 && $color == ""){
			$harga = 0;
			$color = "red";
			$warna = $color;
		}
		else{
			$harga = 0;
			$warna = "$color";
		}
		$total = $panjang * $harga;
		echo '<font color="' .$warna.'">Nama : ' .$nama. '</font><br>';
		echo '<font color="' .$warna.'">Total harga : ' .$total.'</font><br>';
	}
?>

<?php
	if(isset($_POST['cari'])){
       bet($_POST['nama'], $_POST['color']);
    }
?>