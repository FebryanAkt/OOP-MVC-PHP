<?php
    class Overriding {
        // property
        public $judul, 
                $penulis, 
                $penerbit, 
                $harga,
                $waktuTamat;
        // konstruktor
        public function __construct($judul, $penulis, $penerbit, $harga, $waktuTamat = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->waktuTamat = $waktuTamat;
        }
        // method
        public function getInfoProduk (){
            $str = "{$this->judul} | {$this->penulis} {$this->penerbit} (Rp. {$this->harga})";
            return $str;
        }
    }

    class Anime extends Overriding {
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

    class Manga extends Overriding {
        public $waktuTamat;
        public function __construct($judul, $penulis, $penerbit, $harga, $waktuTamat = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuTamat = $waktuTamat;
        }
        public function getInfoProduk(){
            $str = "Manga : ". parent::getInfoProduk() . " - {$this->waktuTamat} Jam ";
            return $str;
        }
    }

    class CetakProduk{
        public function cetak(Overriding $produk ){
            $str = "{$produk->judul} | {$produk->penulis} {$produk->penerbit} Rp. {$produk->harga}";
            return $str;
        }
    }

    $produk1 = new Anime ("naruto", "masashi", "shounen", 30000, 100);
    $produk2 = new Manga ("boruto", "masashi", "shounen", 20000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
?>