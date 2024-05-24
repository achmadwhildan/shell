<?php 
    if (isset($_POST['angka']) && isset($_POST['pangkat'])){
        $hasil = $_POST['angka'] ** $_POST['pangkat'];
        echo "<P style='color: red; font-weight: bold'>" . $_POST['angka'] . 
        " pangkat " . $_POST['pangkat']. " maka hasilnya " .
        $hasil . "</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pangkat</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="angka">Nilai Angka</label>
        <input type="number" name="angka" id="angka"><br>
        <label for="angka">Nilai Pangkat</label>
        <input type="number" name="pangkat" id="angka"><br>
        <button type="submit" name="kirim">Kirim</button>
    </form>

</body>
</html>
