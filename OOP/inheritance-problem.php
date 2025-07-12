<?php
    class contstructor {
        // property
        public $judul, 
                $penulis, 
                $penerbit, 
                $harga,
                $jmlHalaman,
                $waktuTamat,
                $tipe;
        
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman = 0, $waktuTamat = 0, $tipe){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuTamat = $waktuTamat;
            $this->tipe = $tipe;
        }
        public function getInfoLengkap() {
            $str = "{$this->tipe} : {$this->judul} | {$this->penulis} {$this->penerbit} (Rp. {$this->harga}) ";
            if ($this->tipe == "anime") {
                $str .= "- {$this->jmlHalaman} Halaman.";
            } else if ($this->tipe == "manga") {
                $str .= " ~ {$this->waktuTamat} Jam";
            }
            return $str;
        }
    }

    class CetakProduk{
        public function cetak(contstructor $produk ){
            $str = "{$produk->judul} | {$produk->penulis} {$produk->penerbit} Rp. {$produk->harga}";
            return $str;
        }
    }

    $produk1 = new contstructor("naruto", "masashi", "shounen", 30000, 100, 0, "anime");
    $produk2 = new contstructor("boruto", "masashi", "shounen", 20000, 0, 50, "manga");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();
?>