<!-- // Deskripsi: file untuk menghubungkan ke database -->
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'beasiswa';
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn) {
    echo "koneksi gagal" + mysqli_connect_error();
}
?>