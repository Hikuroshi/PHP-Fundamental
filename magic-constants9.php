<?php
echo "Ini baris pertama<br>";
echo "Ini baris ke: " . __LINE__ . "<br>";
echo "Ini baris ketiga<br>";
echo "<hr>";

echo "File ini berada di: " . __FILE__;
echo "<hr>";

echo "File ini berada di direktori: " . __DIR__;
// include __DIR__."/config.html";
echo "<hr>";

function aku_mandi(){
    echo "Nama funsi ini adalah: " . __FUNCTION__;
}
aku_mandi();
echo "<hr>";

class ManusiaWibu {
    function printClassName(){
        echo "Nama class adalah: ".__CLASS__;
    }
}
$aku = new ManusiaWibu();
$aku -> printClassName();
echo "<hr>";

// namespace Balmond;
trait Makhluk{
    function printTrait(){
        echo  "Nama Trait adalah: ". __TRAIT__;
    }
}
class ManusiaAnime {
    use Makhluk;
}
$dia = new ManusiaAnime();
$dia -> printTrait();
echo "<hr>";

class Waifu {
    function lari(){
        echo "Ini adalah method: ". __METHOD__ . "<br>";
    }
    function lompat(){
        echo "Ini adalah method: ". __METHOD__ . "<br>";
    }
}
$kamu = new Waifu();
$kamu -> lari();
$kamu -> lompat();
echo "<hr>";

// namespace Zilong;
class Husbu {
    function printNameNamespace(){
        echo "Nama namespace adalah: ". __NAMESPACE__;
    }
}
$agus = new Husbu();
$agus -> printNameNamespace();
echo "<hr>";

// namespace Vexana {
    class Wibu {
    }
    echo "Nama class adalah: ". Wibu::class;
// }
?>