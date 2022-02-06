<?php
// Mengisi nilai variabel
$nama_barang = "Teh Python";
$harga = 1000;
$stok = 50;

// Mengisi ulang variabel
$stok = 40;

// Variabel tanpa isi
$varKosong = 0;
$var_kosong = "";

// Menampilkan isi variabel
echo "Denis membeli $nama_barang seharga Rp $harga";
echo "<hr>";


// Tipe Data
// tipe data char
$jenis_kelamin = "L";

// tipe data string 
$nama_lengkap = "Muhammad Alucard";

// tipe data integer
$umur = 19;

// tipe data float
$berat = 47.6;

// tipe data boolean
$menikah = false;

echo "Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur tahun<br>";
echo "Berat badan: $berat<br>";
echo "Menikah: $menikah<br>";
echo "<hr>";

// tipe data array
$makanan = array("Ayam Goreng", "Soto", "Nasi Padang");
$minuman = ["Teh", "Kopi", "Jus Jeruk"];

// tipe data objek
// $user = new User();

// tipe data NULL
$nama = NULL;


// Konversi Tipe Data
$gg = "1";
$gg *= 2;
$gg = $gg * 1.2;
$gg = 5 * "10 Little Piggies";
$gg = 2 * "9 Kittens";

$a = "32";
$a = (int) $a;
$a = (float) $a;
$a = (string) $a;


// Menghapus Variabel
$trash = 9213;

// hapus variabel
unset($trash);

// coba akses $trash
echo ($trash)
?>