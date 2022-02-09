<?php
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Hiku<br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenalan();
echo "<hr>";

function kenalan($nama, $salam){
    echo $salam. ", ";
    echo "Perkenalkan nama saya $nama<br>";
    echo "Senang berkenalan dengan anda<br>";
}
kenalan("Balmond", "Halo");
echo "<hr>";

$saya = "Zilong";
$ucapSalam = "Selamat pagi";
kenalan($saya, $ucapSalam);
echo "<hr>";

function perkenal($nama, $salam = "Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya $nama <br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenal("Alucard", "Hi");
echo "<hr>";

$aku = "Miya";
$ucapanSalam = "Selamat sore";
perkenal($aku);
echo "<hr>";

function hitungUmur($thn_lahir, $thn_skrng){
    $umur = $thn_skrng - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(1996, 2022). " tahun<hr>";

function kenal($nama, $salam="Hai"){
    echo $salam. ", ";
    echo "Perkenalkan nama saya $nama<br>";
    echo "Saya berusia ". hitungUmur(2001, 2050). " tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}
kenal("Amogus");
echo "<hr>";

function faktorial($angka){
    if($angka < 2){
        return 1;
    } else {
        return ($angka * faktorial($angka-1));
    }
}
echo "faktorial 5 adalah ". faktorial(5);
?>