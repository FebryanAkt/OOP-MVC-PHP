<?php
    class Visibility {
        // property
        public $judul, $penulis, $penerbit; 
        protected $diskon; //visibility
        private $harga; //visibility

        // konstruktor
        public function __construct($judul, $penulis, $penerbit, $harga){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getHarga(){ //visibility
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        // method
        public function getInfoProduk (){
            $str = "{$this->judul} | {$this->penulis} {$this->penerbit} (Rp. {$this->harga})";
            return $str;
        }
    }

    class Anime extends Visibility {
        public $jmlHalaman;
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman = 0){ //overriding
            parent:: __construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }
        public function getInfoProduk(){
            $str = "Anime : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman"; //overriding
            return $str;
        }
    }

    class Manga extends Visibility {
        public $waktuTamat;
        public function __construct($judul, $penulis, $penerbit, $harga, $waktuTamat = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuTamat = $waktuTamat;
        }
        public function setDiskon($diskon){ //visibility
            $this->diskon = $diskon;
        }
        public function getInfoProduk(){
            $str = "Manga : ". parent::getInfoProduk() . " - {$this->waktuTamat} Jam ";
            return $str;
        }
    }

    $produk1 = new Anime ("naruto", "masashi", "shounen", 30000, 100);
    $produk2 = new Manga ("boruto", "masashi", "shounen", 20000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    echo "<hr>";
    $produk2->setDiskon(50);
    echo $produk2->getHarga();
?>