<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //funsi untuk menghitung huruf mutu berdasarkan rata-rata nilai 
    function hitungHurufMutu($rataNilai){
        if ($rataNilai >= 90) {
            return 'A';           
        } elseif ($rataNilai >= 85) {
            return 'A-';
        } elseif ($rataNilai >= 80) {
            return 'B+';
        } elseif ($rataNilai >= 75) {
            return 'B';
        } elseif ($rataNilai >= 70) {
            return 'B-';
        } elseif ($rataNilai >= 65) {
            return 'C+';
        } elseif ($rataNilai >= 60) {
            return 'C';
        } elseif ($rataNilai >= 55) {
            return 'C-';
        } elseif ($rataNilai >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }
//funsi untuk menampilkan form input

    function tampilkanFormInput() {
        echo '
        <form method="post">
            <label for="NIS">NIS:</label><br>
            <input type ="text" id ="NIS" name ="NIS"><br>
            <label for="Nama">Nama:</label><br>
            <input type ="text" id ="Nama" name ="Nama"><br>
            <label for="Rombel">Rombel:</label><br>
            <input type ="text" id ="Rombel" name ="Rombel"><br>
            <label for="NilaiMTK">Nilai Matematika:</label><br>
            <input type ="number" id ="NilaiMTK" name ="NilaiMTk"><br>
            <label for="NilaiBing">Nilai Bahasa Inggris:</label><br>
            <input type ="number" id ="NilaiBing" name ="NilaiBing"><br>
            <label for="NilaiBind">Nilai Bahasa Indonesia:</label><br>
            <input type ="number" id ="NilaiBind" name ="NilaiBind"><br>
            <label for="NilaiProd">Nilai Produktif:</label><br>
            <input type ="number" id ="NilaiProd" name ="NilaiProd"><br><br>
            <input type ="submit" value="Submit"><br>
        </form>';
    }
    
//memeriksa apakah form telah di-submit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Mengambil data dari from 
        $NIS = $_POST['NIS'];
        $Nama = $_POST['Nama'];
        $Rombel = $_POST['Rombel'];
        $NilaiMTK = $_POST['NilaiMTK'];
        $NilaiBing = $_POST['NilaiBing'];
        $NilaiBInd = $_POST['NilaiBind'];
        $NilaiProd = $_POST['NilaiProd'];

//menghitung rata-rata nilai
    $rataNilai = ($NilaiMTK + $NilaiBing + $NilaiBInd + $NilaiProd) / 4;

//menghitung huruf mutu
    $hurufMutu = hitungHurufMutu($rataNilai);

//menambah data siswa kedalam array daftarSiswa
    $siswaBaru = array(
        'NIS' => $NIS,
        'Nama' => $Nama,
        'Rombel' => $Rombel,
        'RataNilai' => $rataNilai,
        'HurufMutu' => $hurufMutu,
    );

//memeriksa apakah array daftarSiswa udah ada
    if(!isset($daftarSiswa)) {
        $daftarSiswa = array();
    }

//menambahkan data siswa baru kedalam array daftarSiswa
    array_push($daftarSiswa, $siswaBaru);

//menampilkan daftar siswa yanag telah di input
    echo '<h2>Daftar Siswa</h2>';
    echo '<table border="1">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rombel</th>
                <th>Rata-rata Nilai</th>
                <th>Huruf Mutu</th>
            </tr>';
    
    $nilaiTertinggi = 0;
    foreach ($daftarSiswa as $siswa) {
        echo '<tr>
                <td>'.$siswa['NIS'].'</td>
                <td>'.$siswa['Nama'].'</td>
                <td>'.$siswa['Rombel'].'</td>
                <td>'.$siswa['RataNilai'].'</td>
                <td>'.$siswa['HurufMutu'].'</td>
            </tr>';
//memperbarui nilai tertinggi jika di perlukan
        if ($siswa['RataNilai'] > $nilaiTertinggi) {
            $nilaiTertinggi = $siswa['RataNilai'];
        }
    }
    echo '</table>';

    //menampilkan nilai rata-rata terbesar 
    echo '<h2>Nilai Rata-rata Terbesar:</h2>';
    echo '<p>'.$nilaiTertinggi.'</p>';

    //menampilkan input kembali
    tampilkanFormInput();
    } else {
    tampilkanFormInput();
    }


    ?>
</body>
</html>