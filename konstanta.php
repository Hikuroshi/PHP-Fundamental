<?php
// fungsi define()
define('DB_SERVER', 'localhost');
define('DB_USER', 'hiku');
define('DB_PASS', '123gg');
define('DB_NAME', 'belajar');

// kata kunci const
const API_KEY = "12345678";

// Memanggil konstanta
echo "Nama User: ". DB_USER;
echo "<hr>";

// Contoh
define('VERSION', '1.0.0');

const SITE_NAME = "Hikuroshi";
const BASE_URL = "https://www.hikuroshi.com";

echo "Site name: ". SITE_NAME . "<br>";
echo "URL: ". BASE_URL . "<br>";
echo "Version: ". VERSION . "<br>";
?>