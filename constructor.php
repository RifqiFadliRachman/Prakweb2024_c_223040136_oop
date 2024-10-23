<?php 

class Produk {
    public $judul,  
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("Naruto", "Masasi kishimoto", "Sony Computer", 30000 );
$produk2 = new Produk("uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball", "CyberConnect2", "Bandai Namco Entertainmen", 775000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();

//var_dump($produk3);

?>