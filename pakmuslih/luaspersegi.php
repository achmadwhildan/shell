<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi panjang</title>
</head>
<body>
    <h1>Menghitung luas persegi panjang</h1>
    <form method="post">
    <label for="bilangan1">panjang:</label>
    <input type="number" id="bilangan1" name="bilangan1"required><br><br>
    <label for="bilangan2">lebar:</label>
    <input type="number" id="bilangan2" name="bilangan2"required><br><br>
    <input type="submit" value="cek luas persegi panjang"><br><br>
    </form>
    <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $panjang=$_POST["bilangan1"];
            $lebar=$_POST["bilangan2"];
            $luas=$panjang*$lebar;
            echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas";
        }
    ?>
</body>
</html>