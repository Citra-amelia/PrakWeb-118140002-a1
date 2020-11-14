<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citra Amelia 118140002 Cluster A1 WEB RA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    

    <div class="container">
        <h2 style="text-align: center;">Kalkulator</h2>
        
        <form method="post" class="text-align:center;justify-content:center;">
            <div class="d-flex">
                <div class="form-group ">
                    <label for="">Angka Pertama</label>
                    <input type="number" name="satu" value="<?php if(isset($_POST['submit'])){ echo $_POST['satu']; }?>" class="form-control">
                </div>
                <div class="form-group ">
                    <label for="">Angka Kedua</label>
                    <input type="number" name="dua" value="<?php if(isset($_POST['submit'])){ echo $_POST['dua']; }?>" class="form-control">
                </div>
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary"/>
        </form>
    </div>

    <div class="container">
    <?php 
        if(isset($_POST['submit']) && $_POST['satu'] != "" && $_POST['dua'] != ""){
        $operasi = ['+', '-', '*', '/', '%'];
        $data = [ $_POST['satu'], $_POST['dua'] ]; 
    ?>
        
        <?php foreach($data as $key => $datas){ ?>
            <p>Bilangan <?php echo $key + 1; ?> = <?php echo $datas; ?></p>
        <?php } ?>

        <p>Hasil dari setiap Operasi :</p>

        <p>
            <?php
                foreach($operasi as $operasi){
                    switch ($operasi) {
                        case '+':
                            echo "PENJUMLAHAN" . "<br>";
                            echo "Operator : " . $operasi . "<br>";
                            echo "Hasil : " . ($data[0] + $data[1]) . "<br><br>";
                            break;

                        case '-':
                            echo "PEGURANGAN" . "<br>";
                            echo "Operator : " . $operasi . "<br>";
                            echo "Hasil : " . ($data[0] - $data[1]) . "<br><br>";
                            break;
                        
                        case '*':
                            echo "PERKALIAN" . "<br>";
                            echo "Operator : " . $operasi . "<br>";
                            echo "Hasil : " . ($data[0] * $data[1]) . "<br><br>";
                            break;

                        case '/':
                            echo "PEMBAGIAN" . "<br>";
                            echo "Operator : " . $operasi . "<br>";
                            echo "Hasil : " . ($data[0] / $data[1]) . "<br><br>";
                            break;

                        case '%':
                            echo "MODULUS" . "<br>";
                            echo "Operator : " . $operasi . "<br>";
                            echo "Hasil : " . ($data[0] % $data[1]) . "<br><br>";
                            break;
                    }
                }
            ?>
        </p>

    <?php } else { echo "Silakan Masukkan Angka..."; } ?>
    </div>

</body>
</html>