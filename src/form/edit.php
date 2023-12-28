<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@300;400&family=Young+Serif&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            width: 75%;
            height: 600px;
        }

        .container .judul {
            font-size: 1.6em;
            border-bottom: 1px solid black;
            margin-left: 30px;
            margin-top: 50px;
            text-align: center;
        }

        .form form {
            margin-top: 70px;
            margin-left: 30px;
            display: grid;
            height: 300px;
            grid-template-columns: 2fr 2fr;
            gap: 20px;
            justify-content: center;
            width: 100%;
        }

        .form .form-group input,
        .text {
            width: 550px;
            border: none;
            border-bottom: 1px solid rgb(1, 7, 1);
            padding: 1px;
            font-size: 1.2em;
            color: #666;
        }

        .form .btn,
        .btn-1 {
            position: relative;
            width: 200px;
            height: 30px;
            left: 30px;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
        }

        .form .tombol .btn {
            background-color: #FE0000;
        }

        .form .tombol .btn:hover {
            background-color: #666;
        }

        .form .tombol .btn-1 {
            background-color: #BDBDD7;
            margin-left: 10px;
        }

        .form .tombol .btn-1:hover {
            background-color: #ddd;
        }

        .time {
            margin-bottom: 0px;
        }
    </style>
</head>

<?php
// if($_SESSION(['status'])){
//     echo "<h4>".$_SESSION['status']."</h4>";
//     unset($_SESSION['status']);
// }
?>

<body>
    <div class="container">
        <div class="judul">
            <h1>Ubah Jadwal Booking??</h1>
        </div>
        <div class="form">
            <form action="" method="get">
                <input values="<?php echo $baris['id']; ?>" type="hidden" name="id" id="" placeholder="masukkan nama"
                    required>
                <div class="form-group">
                    <label for="nama" class="text">Username</label>
                    <input values="<?php echo $baris['nama']; ?>" type="text" name="nama" id=""
                        placeholder="masukkan nama" required>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon" class="text">Nomor</label>
                    <input values="<?php echo $baris['nomor_telepon']; ?> type=" text" name="nomor_telepon" id=""
                        placeholder="masukkan nomor telepon" required>
                </div>
                <div class="form-group">
                    <label for="tipe_kendaraan" class="text">tipe</label>
                    <input values="<?php echo $baris['tipe_kendaraan']; ?> type=" text" name="tipe_kendaraan" id=""
                        placeholder="masukkan tipe kendaraan" required>
                </div>
                <div class="form-group">
                    <label for="waktu" class="text">waktu pesan</label>
                    <input values="<?php echo $baris['waktu']; ?>" type="datetime-local" name="waktu" id="" required>
                </div>
                <div class="tombol">
                    <button name="submit" class="btn">Booking</button>
                    <button name="submit-2" class="btn-1"
                        onclick="window.location.href='../src/home.html'">lihat</button>
                </div>
        </div>

        </form>
    </div>
</body>

</html>
<?php
include_once("connect.php");
// $id = $_GET['id'];
$baca = mysqli_query($conn, "SELECT * FROM tb_parkir");
while ($baris = mysqli_fetch_array($baca)) {

    if (isset($_GET['action']) && isset($_GET['id'])) {
        $action = $_GET['action'];
        $id = $_GET['id'];

        // if ($action == 'hapus') {
        //     $hapus = mysqli_query($koneksi, "DELETE FROM db_siswa WHERE id_siswa='$id_siswa'");
        //     header("Location: coba9.php");
        if ($action == 'edit') {
            $edit = mysqli_query($conn, "SELECT * FROM tb_parkir WHERE id='$id'");
            $proses = mysqli_fetch_array($edit);
        }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $nomor_telepon = $_POST['nomor_telepon'];
            $tipe_kendaraan = $_POST['tipe_kendaraan'];
            $waktu = $_POST['waktu'];
            $query_update = "UPDATE parkiran SET nama='$nama', nomor_telepon='$nomor_telepon', tipe_kendaraan ='$tipe_kendaraan', waktu = '$waktu' WHERE id='$id'";
            $update = mysqli_query($conn, $query_update);
            header("Location: dashboard.php");
        }
    }
}

?>