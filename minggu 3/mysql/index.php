<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Amelia 118140002 Cluster A1 WEB RA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<?php
	include 'koneksi.php';
	$jurusan = $praktikum->koneksi->query("Select * from jurusan");
?>
<body>
	<h2>Data Mahasiswa</h2>
	<h2>-------------------------</h2>
	<h2>Tambah Data</h2>
<form method="POST" action="#">
	<label>NRP: </label>
    <input type="text" name="nrp" placeholder="Masukkan NRP"><br>
    <label>Nama: </label>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    <label>Alamat: </label>
    <input type="text" name="alamat" placeholder="Masukkan Alamat"><br>
    <label>Jurusan: </label>
    <select name="jurusan" id="">
		<?php while($data = mysqli_fetch_row($jurusan)){?>
			<option value="<?= $data[0] ?>"><?= $data[1] ?></option>
		<?php }?>
	</select><br>
    <button type="submit" name="tambah">Tambah Data</button>
</form>
<?php
	if(isset($_POST['tambah'])){
		$praktikum -> add_mahasiswa($_POST['nrp'], $_POST['nama'], $_POST['alamat'], $_POST['jurusan']);
		echo "<script>alert('Data Tersimpan');</script>";
	}
?>
	<h2>-------------------------</h2>
	<h2>Mencari Data</h2>
<form action="#" method="POST">
	<label>Nama: </label>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
	<button type="submit" name="cari">Cari Data</button>		
</form>
<?php
	if(isset($_POST['cari'])){
		$datamahasiswa = $praktikum -> take_mahasiswa($_POST['nama']);
		foreach ($datamahasiswa as $value) {
			echo $value["nrp"];
			echo '<br>';
			echo $value["nama"];
			echo '<br>';
			echo $value["alamat"];
			echo '<br>';
			echo $value["jurusan"];
			echo '<br>';
			// nrp, mahasiswa.nama, alamat, jurusan.nama as jurusan
		}
	}
?>
	<h2>-------------------------</h2>
	<h2>Delete Data</h2>
<form method="POST" action="#">
	<label>NRP: </label>
    <input type="text" name="nrp" placeholder="Masukkan NRP"><br>
	<button type="submit" name="hapus">Hapus Data</button>		
</form>
<?php
	if(isset($_POST['hapus'])){
		$praktikum -> delete_mahasiswa($_POST['nrp']);
		echo "<script>alert('Data Terhapus');</script>";
	}
?>
</body>
</html>