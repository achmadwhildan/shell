<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .mx-auto {
            width: 800px;
        }

        .card-header {
            text-align: center;
            background-color: aqua;
        }

        .col12{
            display: flex;
        }

        .col12 input {
            text-align: center;
            background-color: aqua;
            color: white;
            border-radius: 5px;
            width: 50%;
            height: 40px;
            text-align: center;
            justify-content: center;
            column-gap: 20px;
            margin-right: 10px;
        }

        button {
            background-color: white;
            border-radius: 5px;
            width: 50%;
            height: 40px;
            text-align: center;
            justify-content: center;
            column-gap: 20px;
        }

        button a {
            text-align: center;
            text-decoration: none;
            color: black;
        }
    </style>

</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-secondry">
                <h2>DATA SISWA</h2>
            </div>
            <div class="card-body">
                <table align="center">
                    <form method="post" action="">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Masukan nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3 row">
                            <label for="nis" class="col-sm-2 col-form-label">Masukan nis</label>
                            <input type="number" class="form-control" id="nis" name="nis">
                        </div>
                        <div class="mb-3 row">
                            <label for="rayon" class="col-sm-2 col-form-label">Masukan rayon</label>
                            <input type="text" class="form-control" id="rayon" name="rayon">
                        </div>
                        <div class="col12">
                            <input type="submit" name="kirim" value="tambah">
                            <button><a href="reset.php">reset</a></button>
                        </div>
                    </form>
                </table>
            </div>
            <!-- <tr>
                            <td><label for="nama">Masukan nama </label></td>
                            <td><input type="text" id="nama" name="nama"></td>
                        </tr>
                        <tr>
                            <td><label for="nis">Masukan nis </label></td>
                            <td><input type="number" id="nis" name="nis"></td>
                        </tr>
                        <tr>
                            <td><label for="rayon">Masukan rayon </label></td>
                            <td><input type="text" id="rayon" name="rayon"></td>
                        </tr>
                        
                    -->

        </div>
    </div>
    </div>


    <?php
    //mulai sesi baru 
    session_start();

    // kalo belum ada $_session['dataStudent'] maka buat dengan aarray kosong
    if (!isset($_SESSION['dataStudent'])) {
        $_SESSION['dataStudent'] = array();
    }
    // var_dump($_SESSION['dataStudent']);
    
    if (isset($_POST['kirim'])) {
        if (isset($_POST['nama']) && isset($_POST['nis']) && isset($_POST['rayon'])) {
            $data = [
                'nama' => $_POST['nama'],
                'nis' => $_POST['nis'],
                'rayon' => $_POST['rayon'],
            ];
            array_push($_SESSION['dataStudent'], $data);
        }
    }
    echo "<br>";

    //validasi data yang ingin di hapus
    if (isset($_GET['hapus'])) {
        $key = $_GET['hapus'];
        unset($_SESSION['dataStudent'][$key]);
        header("Location: tugas.php");
    }

    //kalo $_SESSION['dataStudent'] tidak kosong atau ada isinya maka tampilkan hasi; foerechnya
    if (!empty($_SESSION['dataStudent'])) {
        foreach ($_SESSION['dataStudent'] as $key => $value) {
            echo "Nama : " . $value['nama'] . '<br>';
            echo "Nis : " . $value['nis'] . '<br>';
            echo "Rayon : " . $value["rayon"] . '<br>';
            echo '<a href="?hapus=' . $key . '">Hapus</a>';
            echo "<hr>";
        }
    }
    ?>
</body>

</html>