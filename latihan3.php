<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Bangun Datar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Hitung Luas Bangun Datar</h1>
        </div>
        <div class="content">
            <div class="form-container">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="bangunDatar">Bangun Datar:</label>
                        <select id="bangunDatar" name="bangunDatar" onchange="showForm()">
                            <option value="">Pilih Bangun Datar</option>
                            <option value="persegi">Persegi</option>
                            <option value="segitiga">Segitiga</option>
                            <option value="lingkaran">Lingkaran</option>
                        </select>
                    </div>
                    <div id="persegi-form" class="form-group hidden">
                        <label for="sisiPersegi">Sisi:</label>
                        <input type="number" id="sisiPersegi" name="sisiPersegi" placeholder="Masukkan sisi persegi" required>
                    </div>
                    <div id="segitiga-form" class="form-group hidden">
                        <label for="alasSegitiga">Alas:</label>
                        <input type="number" id="alasSegitiga" name="alasSegitiga" placeholder="Masukkan alas segitiga" required>
                        <br>
                        <label for="tinggiSegitiga">Tinggi:</label>
                        <input type="number" id="tinggiSegitiga" name="tinggiSegitiga" placeholder="Masukkan tinggi segitiga" required>
                    </div>
                    <div id="lingkaran-form" class="form-group hidden">
                        <label for="jariJari">Jari-jari:</label>
                        <input type="number" id="jariJari" name="jariJari" placeholder="Masukkan jari-jari lingkaran" required>
                    </div>
                    <button type="submit">Hitung</button>
                </form>
            </div>
            <div class="hasil-container">
                <?php
                if (isset($_POST['bangunDatar'])) {
                    $bangunDatar = $_POST['bangunDatar'];

                    if ($bangunDatar === 'persegi') {
                        $sisiPersegi = $_POST['sisiPersegi'];
                        $luasPersegi = $sisiPersegi * $sisiPersegi;

                        echo "<div class='hasil'>";
                        echo "<h3>Luas Persegi</h3>";
                        echo "<p>Sisi: $sisiPersegi</p>";
                        echo "<p>Luas: $luasPersegi</p>";
                        echo "</div>";
                    } elseif ($bangunDatar === 'segitiga') {
                        $alasSegitiga = $_POST['alasSegitiga'];
                        $tinggiSegitiga = $_POST['tinggiSegitiga'];
                        $luasSegitiga = 0.5 * $alasSegitiga * $tinggiSegitiga;

                        echo "<div class='hasil'>";
                        echo "<h3>Luas Segitiga</h3>";
                        echo "<p>Alas: $alasSegitiga</p>";
                        echo "<p>Tinggi: $tinggiSegitiga</p>";
                        echo "<p>Luas: $luasSegitiga</p>";
                        echo "</div>";
                    } elseif ($bangunDatar === 'lingkaran') {
                        $jariJari = $_POST['jariJari'];
                        $luasLingkaran = pi() * $jariJari * $jariJari;

                        echo "<div class='hasil'>";
                        echo "<h3>Luas Lingkaran</h3>";
                        echo "<p>Jari-jari: $jariJari</p>";
                        echo "<p>Luas: $luasLingkaran</p>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
