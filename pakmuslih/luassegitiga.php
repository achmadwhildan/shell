<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
</head>
<body>
    <h1>Menghitung luas segitiga</h1>
    <form method="post">
    <label for="bilangan1">Alas:</label>
    <input type="number" id="bilangan1" name="bilangan1"required><br><br>
    <label for="bilangan2">Tinggi:</label>
    <input type="number" id="bilangan2" name="bilangan2"required><br><br>
    <input type="submit" value="cek luas persegi panjang"><br><br>
    </form>
    <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $alas=$_POST["bilangan1"];
            $tinggi=$_POST["bilangan2"];
            $luas=0.5 *$alas*$tinggi;
            echo "Luas persegi panjang dengan panjang $alas dan lebar $tinggi adalah: $luas";
        }
    ?>
</body>
</html>