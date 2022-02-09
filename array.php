<?php
// Array kosong
$buah = array();
$hewan = [];

// Array dengan isi
$makanan = array("Nasi", "Ikan", "Sambal");
$minuman = ["Teh", "Kopi", "Susu"];

// Array dengan mengisi index tertentu
$anggota[1] = "Muhammad";
$anggota[2] = "Agus";
$anggota[0] = "Yanto";

$item = ["bunga", 89, 34.02, true];

// menampilkan isi array
$barang = ["Buku tulis", "Pena", "Penggaris"];
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<hr>";

for($i = 0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}
echo "<hr>";

foreach($barang as $isi){
    echo $isi."<br>";
}
echo "<hr>";

$j = 0;
while($j < count($barang)){
    echo $barang[$j]."<br>";
    $j++;
}
echo "<hr>";

// Menghapus array
$laptop = [
    "Acer",
    "Lenovo",
    "Asus"
];
unset($laptop[1]);
echo $laptop[0]."<br>";
echo $laptop[1]."<br>";
echo $laptop[2]."<hr>";

echo "<pre>";
print_r($laptop);
echo "</pre><hr>";

// Menambahkan isi array index ke 3
$laptop[3] = "Mac";

// Menambahkan isi array index terakhir
$laptop[] = "MSI";

// Mengganti isi array
$laptop[2] = "Abal";

foreach($laptop as $notebook){
    echo $notebook."<br>";
}
echo "<hr>";

// Array Asosiatif
$artikel = [
    "judul" => "Belajar pemrogramman dari nol",
    "penulis" => "Hiku",
    "view" => "175",
];
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>".$artikel["penulis"]."</p>";
echo "<p>".$artikel["view"]."</p><hr>";

$email["subjek"] = "Assalamualaikum";
$email["pengirim"] = "hiku@hiku.com";
$email["isi"] = "Apa kabar bang? Masih main ML?";
echo "<pre>";
print_r($email);
echo "</pre><hr>";

// Array Multi Dimensi
$matrik = [
    [8, 2, 5],
    [6, 4, 1],
    [3, 9, 0]
];
echo $matrik[1][0];
echo "<hr>";

$post = [
    [
        "judul" => "Belajar PHP dan MySQL untuk newbie",
        "penulis" => "hiku"
    ],
    [
        "judul" => "Tutorial PHP dari noob hingga pro",
        "penulis" => "hiku"
    ],
    [
        "judul" => "Membuat aplikasi web dengan PHP",
        "penulis" => "hiku"
    ]
];
foreach($post as $posts){
    echo "<h2>".$posts["judul"]."</h2>";
    echo "<p>".$posts["penulis"]."</p>";
    echo "<hr>";
}
?>