<?php
include_once("connect.php");
$id = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM tb_parkir WHERE id='$id'");

 if ($hapus == TRUE) {
        echo "data berhasil di hapus";
        header("Location: dashboard.php");
        exit();
    } else {
        echo "data gagal dihapus";
        exit();
    }
?>