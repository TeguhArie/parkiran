<?php
include("connect.php");
?>
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

        .link {
            width: 300px;
            padding: 6px;
            background-color: #ddd;
            position: relative;
            /* height: 9000px; */
            left: 90px;
            top: 1px;
            padding-left: 50px;
            padding-right: 50px;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            text-decoration: none;
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

<body>
    <div class="container">
        <div class="judul">
            <h1>Ubah Jadwal Pesanan</h1>
        </div>
        <div class="form">
            <?php
            if (isset($_GET['action']) && isset($_GET['id'])) {
                $action = $_GET['action'];
                $id = $_GET['id'];

                if ($action == 'hapus') {
                    $hapus = mysqli_query($conn, "DELETE FROM tb_parkir WHERE id='$id'");
                    header("Location: dashboard.php");
                } elseif ($action == 'edit') {
                    $edit = mysqli_query($conn, "SELECT * FROM tb_parkir WHERE id='$id'");
                    $proses = mysqli_fetch_array($edit);
                }
                ?>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $proses['id'] ?>" readonly>
                    <div class="form-group">
                        <label for="nama" class="text">Username</label>
                        <input type="text" name="nama" placeholder="Nama" value="<?= $proses['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon" class="text">Nomor</label>
                        <input type="text" name="nomor_telepon" placeholder="Nomor Telepon"
                            value="<?= $proses['nomor_telepon'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kendaraan" class="text">tipe</label>
                        <input type="text" name="tipe_kendaraan" placeholder="Tipe Kendaraan"
                            value="<?= $proses['tipe_kendaraan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="text">waktu pesan</label>
                        <input type="datetime-local" name="waktu" placeholder="Waktu" value="<?= $proses['waktu'] ?>">
                    </div>
                    <div class="tombol">
                        <input type="submit" name="update" value="Update" class="btn">
                        <a href="dashboard.php" class="link">Lihat</a>
                    </div>
                </form>
                <?php if (isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $nama = $_POST['nama'];
                    $nomor_telepon = $_POST['nomor_telepon'];
                    $tipe_kendaraan = $_POST['tipe_kendaraan'];
                    $waktu = $_POST['waktu'];
                    $query_update = "UPDATE tb_parkir SET nama='$nama', nomor_telepon='$nomor_telepon',tipe_kendaraan='$tipe_kendaraan',waktu='$waktu' WHERE id=$id ";
                    $update = mysqli_query($conn, $query_update);
                    echo "Edit Sukses";
                }
                ?>
            <?php } ?>
</body>

</html> 1