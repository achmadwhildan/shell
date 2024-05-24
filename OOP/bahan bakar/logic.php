<?php 
    //sediakan kotak pembungkus yang akan digunakan (sesuai dengan fitur)
    class DataBahanBakar{
        private $HargaSSuper;
        private $HargaSVPower;
        private $HargaSVPowerDiesel;
        private $HargaSVPowerNitro;

        //attr harga2 di buat private karena sudah ada getter yg akan menampikan datanya,
        public $jenisYangDipilih;
        public $totalLiter;
        //attr diatas duset public karena nilainya akan diisi dari luar
        protected $totalPembayaran;
        //set protected karena hanya digunakan oleh class dia dan turunan untuk proses data 

        public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro){
            //mengisi nilai ke attribute, nilai nantinya diisi dari luar class melalui function
            //nilai dari luar di ambil kedalam class melalui parameter ()   

            $this->HargaSSuper = $valSSuper;
            $this->HargaSVPower = $valSVPower;
            $this->HargaSVPowerDiesel = $valSVPowerDiesel;
            $this->HargaSVPowerNitro = $valSVPowerNitro;
        }

        public function getHarga() {
            //setelah nilai dr attribute di simpan, fungsi getter akan mengembalikan/
            
            //karena data yg akan dikirim/dikeluarkan lebih dari satu, maka data2 tersebut disatukan terlebih dahulu
            $SemuaDataSolar["SSuper"] = $this->HargaSSuper;
            $SemuaDataSolar["SVPower"] = $this->HargaSVPower;
            $SemuaDataSolar["SVPowerDiesel"] = $this->HargaSVPowerDiesel;
            $SemuaDataSolar["SVPowerNitro"] = $this->HargaSVPowerNitro;
            //tujuan utama dari getter : return
            return $SemuaDataSolar;
        }
    }
    
    class Pembelian extends DataBahanBakar {
        // data sudah di sediakan, tinggal proses meghitung jumlah pembelian
        public function totalHarga() {
            $this->totalPembayaran = $this->getHarga()[$this->jenisYangDipilih] * 
            $this->totalLiter;
        }

        public function cetakBukti() {
                echo "--------------------------------------------";
                echo "Jenis Bahan Bakar : " . $this->jenisYangDipilih;
                echo "Total Liter : " . $this->totalLiter;
                echo "Harga Bayar : Rp. ".  number_format($this->totalPembayaran, 0, ',',' .');
                echo "--------------------------------------------";
        }
    }

?>