<?php
class Produk
{
    public
        $merk,
        $tipe,
        $transmisi,
        $harga;

    //kenapa ada __ karena construct adalah salah magic methode (methode yang spesial yan dimiliki oleh php)
    public function __construct($merk = "merk", $tipe = "tipe", $transmisi = "transmisi", $harga = 0)
    {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->transmisi = $transmisi;
        $this->harga = $harga;
    }

    public function tampilkanProduk()
    {
        //$this-> digunakan untuk memanggil variabel yang ada diluar function
        return "$this->merk, $this->tipe";
    }
}

class CetakInfoProduk
{
    //Produk digunakan untuk memberikan penjelasan bahwasanya yang boleh dicetak adalah variabel produk, selain itu tidak bisa di tampilkan
    public function cetak(Produk $produk)
    {
        $str = "{$produk->tampilkanProduk()} | {$produk->transmisi} , Rp. {$produk->harga}";
        return $str;
    }
}

$produk1 = new Produk("TOYOTA", "All New Yaris", "Manual", 100000000);
$produk2 = new Produk("HONDA", "All New Brio", "Matic", 50000000);


// tanda (.) adalah Concatenation yitu menggabungkan string dengan string
echo "Mobil : " . $produk1->tampilkanProduk();
echo "<br>";
echo "Mobil : " . $produk2->tampilkanProduk();

echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
