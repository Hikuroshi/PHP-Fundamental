<?php
// Operator Aritmatika
$a = 7;
$b = 4;

$c = $a + $b;
echo "$a + $b = $c<br>";

$c = $a - $b;
echo "$a - $b = $c<br>";

$c = $a * $b;
echo "$a * $b = $c<br>";

$c = $a / $b;
echo "$a / $b = $c<br>";

$c = $a % $b;
echo "$a % $b = $c<br>";

$c = $a ** $b;
echo "$a ** $b = $c<br>";
echo "<hr>";

// Operator Penugasan
$winRate = 56; 
$winRate += 15;
echo $winRate;
echo "<hr>";

// Operator increment dan decrement
$poin = 0;

$poin++;
$poin++;
$poin++;
$poin--;

echo $poin;
echo "<hr>";

// Operator Relasi
$d = 8;
$e = 3;

$f = $d > $e;
echo "$d > $e: $f<br>";

$f = $d < $e;
echo "$d < $e: $f<br>";

$f = $d == $e;
echo "$d == $e: $f<br>";

$f = $d != $e;
echo "$d != $e: $f<br>";

$f = $d >= $e;
echo "$d >= $e: $f<br>";

$f = $d <= $e;
echo "$d <= $e: $f<br>";
echo "<hr>";

// Operator Logika
$x = true;
$y = false;

$z = $x && $y;
printf("%b && %b = %b<br>", $x, $y, $z);

$z = $x || $y;
printf("%b || %b = %b<br>", $x, $y, $z);

$z = !$x;
printf("!%b = %b<br>", $x, $z);
echo "<hr>";

// Operator Bitwise
$m = 60;
$n = 13;

$o = $m & $n;
echo "$m & $n = $o<br>";

$o = $m | $n;
echo "$m | $n = $o<br>";

$o = $m ^ $n;
echo "$m ^ $n = $o<br>";

$o = $m << $n;
echo "$m << $n = $o<br>";

$o = $m >> $n;
echo "$m >> $n = $o<br>";
echo "<hr>";

// Operator Ternary
$suka = true;
$jawab = $suka ? "iya": "tidak";
echo $jawab
?>