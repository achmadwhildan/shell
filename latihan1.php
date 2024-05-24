

<!DOCTYPE html>
<html>
<head>
    <title>Mencari Bilangan Terbesar, Terkecil, dan Rata-rata</title>
</head>
<body>

<style>
    h2{
        color:white;
    }

    body{
        background-color: green;
    }
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilanganTerbesar = PHP_INT_MIN; // Inisialisasi dengan nilai terkecil
    $bilanganTerkecil = PHP_INT_MAX; // Inisialisasi dengan nilai terbesar
    $totalBilangan = 0;

    // Mengambil 20 bilangan dari form dan melakukan perhitungan
    for ($i = 1; $i <= 20; $i++) {
        $inputName = "bilangan" . $i;
        $bilangan = $_POST[$inputName];

        // Mencari bilangan terbesar
        if ($bilangan > $bilanganTerbesar) {
            $bilanganTerbesar = $bilangan;
        }

        // Mencari bilangan terkecil
        if ($bilangan < $bilanganTerkecil) {
            $bilanganTerkecil = $bilangan;
        }

        // Menambahkan bilangan ke total untuk perhitungan rata-rata
        $totalBilangan += $bilangan;
    }

    // Menghitung rata-rata
    $rataRata = $totalBilangan / 20;
}
?>

<h2>Mencari Bilangan Terbesar, Terkecil, dan Rata-rata</h2>

<?php

$nis = "12309486";
$nama = "Achmad Whildan";
$rombel = "pplg x-2";
$rayon = "cisarua 2";



echo "NIS: $nis<br>";
echo "Nama: $nama<br>";
echo "Rombel: $rombel<br>";
echo "Rayon: $rayon";

?>
<hr>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php
    // Menampilkan form untuk menginput 20 bilangan
    for ($i = 1; $i <= 20; $i++) {
        echo "Bilangan ke-$i: <input type='number' name='bilangan$i' required><br>";
    }
    ?>
    <br>
    <input type="submit" value="Hitung">
</form>

<?php
// Menampilkan hasil perhitungan jika sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Hasil Perhitungan:</h3>";
    echo "Bilangan Terbesar: $bilanganTerbesar<br>";
    echo "Bilangan Terkecil: $bilanganTerkecil<br>";
    echo "Rata-rata: $rataRata<br>";
}
?>

</body>
</html>
