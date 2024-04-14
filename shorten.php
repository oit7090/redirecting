<?php
// Ambil short link dari URL
$shortLink = $_SERVER['REQUEST_URI'];

// Lakukan mapping short link ke URL asli (misalnya, dari database)
$shortToOriginal = array(
    "/abc" => "https://www.example.com/original-url"
);

// Periksa apakah short link ada dalam array
if (array_key_exists($shortLink, $shortToOriginal)) {
    // Redirect ke URL asli
    header("Location: " . $shortToOriginal[$shortLink]);
    exit();
} else {
    // Jika short link tidak ditemukan, tampilkan pesan error
    echo "Short link not found";
}
?>
