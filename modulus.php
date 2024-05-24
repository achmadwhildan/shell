<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $awal = $_POST['awal'];
        $bagi = $_POST['bagi'];
        if ($awal == " " || $bagi == " "){
            echo "<h1> style= 'text-align:center; color:red;'> masukan data yang valid! </h1>";
        
        } else{
        $hasil = $awal % $bagi;
        $dekat = $awal - $hasil;
        $angka = $dekat / $bagi;

        echo "<h1 style='text-align:center;'>sisa bagi $awal % $bagi = $hasil</h1>";
        echo "<h1 style='text-align:center;'>bilangan paling mendekati $dekat hasil dari $angka X $bagi</h1>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pangkat</title>
</head>

<style>

    table, tr, td{
        border: 2px solid gray;
        justify-content: center;
    }


</style>
<body>
    
    <form method="POST" action="">
        <table >
        <tr>
            <td><label for="angka">Nilai Angka</label></td>
            <td><input type="number" name="angka" id="angka"><br></td>
        </tr>
        <tr>
            <td><label for="pangkat">Nilai Angka Pembagi</label></td>
            <td><input type="number" name="pangkat" id="angka"><br></td>
        </tr>
        <tr>
            <td><button type="submit" name="kirim">Kirim</button></td>
        </tr>
        </table>
    </form>

</body>
</html>
