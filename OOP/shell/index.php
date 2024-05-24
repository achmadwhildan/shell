<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHELL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="popup">
            <img src="shell.png" alt="">
            <h2>Shell</h2>
            <form method="post" action="">
                <label for="jumlah">Masukan Jumlah Liter :</label>
                <input type="number" name="jumlah" id="jumlah" ><br><br>
                <label for="jenis">Pilih Tipe Bahan Bakar :</label>
                <select name="jenis" id="jenis">
                    <option value="Shell Super">Shell Super</option>
                    <option value="Shell V-Power">Shell V-Power</option>
                    <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                    <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                </select><br><br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php
    class Shell {
        protected $harga;
        protected $jenis;
        protected $jumlah;
        protected $ppn;

        public function __construct($jenis, $jumlah, $ppn) {
            $this->jenis = $jenis;
            $this->jumlah = $jumlah;
            $this->ppn = $ppn;
            $this->setHarga();
        }

        protected function setHarga() {
            switch ($this->jenis) {
                case 'Shell Super':
                    $this->harga = 15420;
                    break;
                case 'Shell V-Power':
                    $this->harga = 16130;
                    break;
                case 'Shell V-Power Diesel':
                    $this->harga = 18310;
                    break;
                case 'Shell V-Power Nitro':
                    $this->harga = 16510;
                    break;
                default:
                    $this->harga = 0;
            }
        }

        public function getHarga() {
            return $this->harga;
        }

        public function getJumlah() {
            return $this->jumlah;
        }

        public function getJenis() {
            return $this->jenis;
        }

        public function getPpn() {
            return $this->ppn;
        }

        public function totalPembayaran() {
            $hargaTotal = $this->harga * $this->jumlah;
            $ppnTotal = $hargaTotal * ($this->ppn / 100);
            return $hargaTotal + $ppnTotal;
        }
    }

    if(isset($_POST['submit'])) {
        $jenis = $_POST['jenis'];
        $jumlah = $_POST['jumlah'];
        $ppn = 10; // PPN 10%
        if(empty($jenis) || empty($jumlah)){
            echo "<h1 style='text-align:center; color:red;'>Masukan semua data!</h1>";
        } else if($jumlah < 1){
            echo "<h1 style='text-align:center; color:red;'>Masukan data yang benar!</h1>";
        } else {
            $transaksi = new Shell($jenis, $jumlah, $ppn);

            echo "<div><center>---------------------------------------";
            echo "<h3>Anda membeli bahan bakar minyak tipe: </h3>" . $transaksi->getJenis();
            echo "<h3>Dengan Jumlah: " . $transaksi->getJumlah() . " Liter</h3>";
            echo "Harga per unit: Rp. " . number_format($transaksi->getHarga(), 2) . "<br>";
            // echo "Total harga sebelum PPN: Rp. " . number_format($transaksi->getHarga() * $transaksi->getJumlah(), 2) . "<br>";
            // echo "PPN (" . $transaksi->getPpn() . "%): Rp. " . number_format(($transaksi->getHarga() * $transaksi->getJumlah() * $transaksi->getPpn() / 100), 2) . "<br>";
            echo "<strong>Total yang harus anda bayar:</strong> Rp. " . number_format($transaksi->totalPembayaran(), 2);
            echo "<br>";
            echo "---------------------------------------</center></div>";
        }
    }
    ?>
</body>
</html>
