<?php
// For
for($i = 0; $i < 10; $i++){
    echo "<h3>Ini perulangan ke-$i</h3>";
}

// While
$ulangi = 0;
while($ulangi < 10){
    echo "<p>Ini perulangan ke-$ulangi</p>";
    $ulangi++;
}

// Do/While
$ulang = 10;
do{
    echo "<p>Ini perulangan ke-$ulang</p>";
    $ulang--;
} while($ulang > 0);

// Foreach
$buku = [
    "Panduan belajar HTML dan CSS pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP pemula",
    "Memahami MySQL dan Database",
    "Membuat Chat Bot dengan PHP",
];

echo "<h5>Judul Buku: </h5>";
echo "<ul>";
foreach($buku as $books){
    echo "<li>$books</li>";
}
echo "</ul>";

// Perulangan Bersarang / Nested Loop
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 10; $j++){
        echo "Perulangan ke-($i, $j)<br>";
    }
}
echo "<hr>";

$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
        echo "Perulangan ke-($i, $j)<br>";
    }
    $i++;
}
?>