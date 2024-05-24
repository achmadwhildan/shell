<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>luas segitiga</title>
    <link rel="stylesheet" href="style.css">
    
</head>
    <body>
            <div class="tombol">
                <button type="submit" value="Kirim" class="btn" ><a href="#">Luas Segitiga</a></button>
                <button type="submit" value="Kirim" class="btn" ><a href="persegi.php">Luas Persegi Panjang</a></button>
            </div>
            <div class="popup">
                <h2>Hitung luas segitiga</h2><br>
                <div class="input-group">
                    <form method="post" style="width: 60%;">
                        <label for="bilangan1">Nilai Alas:</label><br>
                        <input type="number" step="any" id="bilangan1" name="bilangan1"><br>
                        <label for="bilangan2">Nilai Tinggi:</label><br>
                        <input type="number" step="any" id="bilangan2" name="bilangan2"><br><br>
                        <button type="submit" value="Kirim">Hitung</button>
                    </form>
                </div>
            </div>
            
                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    if (isset($_POST['bilangan1']) && isset($_POST['bilangan2'])) {
                        $alas = $_POST['bilangan1'];
                        $tinggi = $_POST['bilangan2'];
                        if($alas == "" || $tinggi == ""){
                        echo "<h1 style='text-align:center; color:red;'>Masukkan data disini!</h1>";
                        } else {
                            $luas = 0.5 * $alas * $tinggi;
                            echo "<div class='result'>Luas segitiga: " . number_format($alas) . " dan tinggi: " . number_format($tinggi) . " adalah: ". number_format($luas) ."</div>";
                        }
                    }
                
                }
                ?>
            <!-- </div> -->
        <!-- </div> -->
    </body>
</html>
