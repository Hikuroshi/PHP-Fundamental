<?php
$saya = "Hikmah";
if($saya == "Hikmah"){
    echo "Halo Hikmah";
} else {
    echo "Kamu bukan siswa SMKN 1 Kragilan";
}
echo "<hr>";

$hari = "Senin";
if($hari == "Senin"){
    echo "Halo hari ini hari Senin";
} elseif($hari == "Selasa"){
    echo "Halo hari ini hari Selasa";
} elseif($hari == "Rabu"){
    echo "Halo hari ini hari Rabu";
} elseif($hari == "Kamis"){
    echo "Halo hari ini hari Kamis";
} elseif($hari == "Jum'at"){
    echo "Halo hari ini hari Jum'at";
} elseif($hari == "Sabtu"){
    echo "Halo hari ini hari Sabtu";
} elseif($hari == "Minggu"){
    echo "Halo hari ini hari Minggu";
} else {
    echo "Hari tidak ditemukan!";
}
echo "<hr>";

$cuaca = "Hujan";
$payung = "Ada";

if($cuaca == "Hujan"){
    if($payung == "Ada"){
        echo "Selamat";
    } else {
        echo "Kehujanan";
    }
} else {
    echo "Panas";
}

if($cuaca == "Hujan" or $payung == "Ada"){
    echo "Selamat";
} else {
    echo "Panas";
}

?>
