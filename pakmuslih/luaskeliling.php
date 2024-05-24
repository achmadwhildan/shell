<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
    <h1>Menghitung Luas Lingkaran</h1>
    <form method="post">
        <label for="jari_jari">Jari-jari:</label>
        <input type="number" id="jari_jari" name="jari_jari" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    // Periksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai jari-jari dari form
        $jari_jari = $_POST["jari_jari"];

        // Hitung luas lingkaran
        $luas = pi() * $jari_jari * $jari_jari;

        // Tampilkan hasilnya
        echo "<p>Luas lingkaran dengan jari-jari $jari_jari adalah: $luas</p>";
    }
    ?>
</body>
</html>