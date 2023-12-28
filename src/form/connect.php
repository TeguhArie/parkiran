<?php
$conn = mysqli_connect("localhost","root","","parkiran");
// session_start();
if (!$conn) {
    die("koneksi error". mysqli_connect_error());
}
?>  