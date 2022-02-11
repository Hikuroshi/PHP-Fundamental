<?php
echo "Saya belajar PHP";
echo "<br>";

$harga = 100000;
if($harga < 90000){
    echo "Anda dapat hadiah";
} else {
    echo "Terimakasih telah berbelanja";
}

$myArray = ["Sosis", "Kentang", "Susu"];
echo "<br>";

echo $myArray[1];
echo "<br>";

for($i = 0; $i < 3; $i++){
    echo $myArray[$i]."<br>";
};

foreach($myArray as $data){
    echo $data;
};
echo "<hr>";

function ArrayKu($nama_array, $jumlah_data){
    for($i = 0; $i < $jumlah_data; $i++){
        echo $nama_array[$i]."<br>";
    }    
}

ArrayKu($myArray, 2)
?>