<?php
    class produk {
        // property
        public $judul = "hujan", 
                $penulis = "tereliye", 
                $penerbit = "GPU", 
                $harga = 100000;
        // method
        public function sayHello(){
            return "hello world";
        }
        public function getLabel(){
            return "$this->penulis, $this->harga";
        }
    }

    // mencetak property
    $produk1 = new produk();
    // ditimpa property baru
    $produk1 -> judul = "naruto";

    // mencetak method
    $produk2 = new produk();
    echo $produk2 -> sayHello();
    echo "<br>";
    echo $produk2 -> getLabel();
?>