<?php
    class Inheritance {
        // property
        public $judul, 
                $penulis, 
                $penerbit, 
                $harga,
                $jmlHalaman,
                $waktuTamat;
        
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman = 0, $waktuTamat = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuTamat = $waktuTamat;
        }
    }

    class Anime extends Inheritance {
        public function getInfoProduk(){
            $str = "Anime : {$this->judul} | {$this->penulis} {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }
    class Manga extends Inheritance {
        public function getInfoProduk(){
            $str = "Manga : {$this->judul} | {$this->penulis} {$this->penerbit} (Rp. {$this->harga}) - {$this->waktuTamat} Jam ";
            return $str;
        }
    }

    class CetakProduk{
        public function cetak(Inheritance $produk ){
            $str = "{$produk->judul} | {$produk->penulis} {$produk->penerbit} Rp. {$produk->harga}";
            return $str;
        }
    }

    $produk1 = new Anime ("naruto", "masashi", "shounen", 30000, 100, 0);
    $produk2 = new Manga ("boruto", "masashi", "shounen", 20000, 0, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
?>