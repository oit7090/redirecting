<?php
// Ambil URL asli dari form
$originalURL = $_POST['urlInput'];

// Buat short link (misalnya, menggunakan hash dari URL asli)
$shortLink = '/' . substr(md5($originalURL), 0, 6); // Contoh short link

// Tampilkan short link
echo "Short link: <a href='$shortLink'>$shortLink</a>";
?>
