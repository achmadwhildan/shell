<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .card {
        width: 700px;
        margin-left: 290px;
        margin-top: 25px;
        border: black solid 2px;
    }

    .card-header {
        text-align: center;
        background-color: grey;
        color: white;
    }

    button {
        background-color: gray;
        border-radius: 5px;
        color: white;
        width: 50%;
        height: 40px;
        text-align: center;
        justify-content: center;
    }

    /* .alert{
        background-color: pink;
        color: red;
    } */
</style>

<body>
    <div class="card">
        <div class="card-header">
            <h2>Rental Motor</h2>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pelanggan :</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Lama Waktu Rental(per hari) :</label>
                        <input type="text" name="waktu" id="waktu" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Motor :</label>
                        <select name="jenis" id="jenis" class="form-select">
                            <option value="" selected>buka menu pilihan ini</option>
                            <option value="Scoopy">Scoopy</option>
                            <option value="Chooper">Chooper</option>
                            <option value="Vespa">Vespa</option>
                            <option value="Beat">Beat</option>
                        </select>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </form>

                <?php
                // Harga rental per hari (sama untuk semua jenis motor)
                $harga_per_hari = 7000;

                // Inisialisasi variabel hasil dan info
                $hasil = "";
                $masuk = "";
                $info = "";

                // Proses input dan hitung total biaya jika tombol 'submit' ditekan
                if (isset($_POST['submit'])) {
                    // Memastikan semua input diisi
                    if (!empty($_POST['nama']) && !empty($_POST['waktu']) && !empty($_POST['jenis'])) {
                        $nama_pelanggan = htmlspecialchars($_POST['nama']);
                        $lama_waktu = htmlspecialchars($_POST['waktu']);
                        $motor = htmlspecialchars($_POST['jenis']);

                        // Fungsi untuk menghitung total biaya rental
                        function hitungBiayaRental($nama_pelanggan, $lama_waktu){
                        
                            // Pajak tambahan
                            $pajak = 10000;

                            // Diskon untuk member
                            $diskon_member = 0.05;

                            // Cek apakah pelanggan merupakan member
                            $nama_member = ["riri", "kaka", "kiko"]; // Daftar nama member
                            $is_member = in_array(strtolower($nama_pelanggan), $nama_member);

                            global $harga_per_hari; // Menggunakan variabel global $harga_per_hari

                            // Hitung total biaya rental
                            $total_biaya = $harga_per_hari * $lama_waktu;

                            // Jika pelanggan merupakan member, berikan diskon 5%
                            if ($is_member) {
                                $total_biaya -= $total_biaya * $diskon_member;
                            }

                            // Tambahkan pajak tambahan
                            $total_biaya += $pajak;

                            return $total_biaya;
                        }

                        // Hitung total biaya rental
                        $hasil = hitungBiayaRental($nama_pelanggan, $lama_waktu);

                        // Menampilkan informasi sesuai kebutuhan
                        if ($hasil > 0) {
                            $info = "$nama_pelanggan berstatus sebagai ";
                            $info .= (in_array(strtolower($nama_pelanggan), ["riri", "kaka", "kiko"])) ? "member " : "non-member ";
                            $info .= (in_array(strtolower($nama_pelanggan), ["riri", "kaka", "kiko"])) ? "mendapatkan diskon 5%. " : "tidak mendapatkan diskon 5%. ";
                            $info .= "Jenis motor yang dirental adalah $motor selama $lama_waktu hari dengan harga rental per hari-harinya: Rp. " . number_format($harga_per_hari, 0, ',', '.') . ".<br>";
                            $info .= "Biaya yang harus dibayarkan adalah Rp. " . number_format($hasil, 0, ',', '.') . ",- ";
                        } else {
                            $info = "Input tidak valid";
                        }
                    } else {
                        $info = "Semua input harus diisi";
                    }
                    echo "<br><div class='alert alert-danger' role='alert'>$info</div>";
                }
                ?>
            </blockquote>
        </div>
    </div>
</body>

</html>
