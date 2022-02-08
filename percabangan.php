<?php
$skor = 87;
if($skor > 80){
    echo "Selamat rank anda telah meningkat<hr>";
}

$rank = "Epic";
if($rank == "Mytic"){
    echo "Mantab, anda adalah pro player";
} else {
    echo "Anda masih newbie";
}
echo "<hr>";

$nilai = 92;
if($nilai > 90){
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade<hr>";

// Percabangan Switch/Case
$level = 4;
switch ($level) {
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!";
        break;
}
echo "<hr>";

// Percabangan Operator Ternary
$suka = true;
echo $suka ? "suka": "Tidak suka";
echo "<hr>";

// Percabangan Bersarang
$umur = 16;
$menikah = false;
if($umur > 18){
    if($menikah){
        echo "Selamat datang pak";
    } else {
        echo "Selamat datang kak";
    }
} else {
    echo "Maaf Website ini hanya untuk umur 18+";
}
?>