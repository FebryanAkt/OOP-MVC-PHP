<?php
    class contstructor {
        // property
        public $judul, 
                $penulis, 
                $penerbit, 
                $harga;
        
        public function __construct($judul, $penulis, $penerbit, $harga){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
    }

    class CetakProduk{
        public function cetak(contstructor $produk ){
            $str = "{$produk->judul} | {$produk->penulis} {$produk->penerbit} Rp. {$produk->harga}";
            return $str;
        }
    }

    $produk1 = new contstructor("naruto", "masashi", "shounen", 30000);
    $produk2 = new contstructor("boruto", "masashi", "shounen", 20000);

    echo "Judul: ". $produk1->judul;
    echo "<br>";
    echo "Judul: ". $produk2->judul;
    echo "<br>";
    
    $infoProduk = new CetakProduk();
    $infoProduk->cetak($produk1);
?>