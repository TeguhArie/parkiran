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
            background-color: #000000;
            color: whitesmoke;
        }

        .container {
            margin-left: 140px;
            width: 80%;
            height: auto;
        }

        .container .judul {
            width: 100%;
            font-size: 2em;
            border-bottom: 3px solid #282A3A;
            margin-top: 50px;
            text-align: center;
        }

        .tabel table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
        }

        th {
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid black;
            background-color: #282A3A;
            color: whitesmoke;
            font-size: 20px;
        }

        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1.5px solid black;
        }

        tr:nth-child(even) {
            background-color: #282A3A;
        }

        .edit {
            background-color: #C69749;
            color: whitesmoke;
            font-size: 17px;
            width: 100px;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 10px;
            text-decoration: none;
            border: 1px solid gray;
        }

        .hapus {
            color: white;
            width: 100px;
            background-color: #666;
            font-size: 17px;
            padding: 3px;
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 10px;
            text-decoration: none;
            border: 1px solid gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="judul">
            <h1>List Pesanan</h1>
        </div>

        <div class="tabel">
            <table>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>nomor</th>
                    <th>kendaraan</th>
                    <th>waktu</th>
                    <th>opsi</th>
                </tr>
                <?php
                include_once("connect.php");

                $baca = mysqli_query($conn, "SELECT * FROM tb_parkir");
                while ($baris = mysqli_fetch_array($baca)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $baris['id']; ?>
                        </td>
                        <td>     
                            <?php echo $baris['nama']; ?>
                        </td>
                        <td>
                            <?php echo $baris['nomor_telepon']; ?>
                        </td>
                        <td>
                            <?php echo $baris['tipe_kendaraan']; ?>
                        </td>
                        <td>
                            <?php echo $baris['waktu']; ?>
                        </td>
                        <td>
                            <a href="edit2.php?action=edit&id=<?php echo $baris['id'] ?>&nama=<?php echo $baris['nama']; ?>&nomor_telepon=<?php echo $baris['nomor_telepon']; ?>&tipe_kendaraan=<?php echo $baris['tipe_kendaraan']; ?>&waktu=<?php echo $baris['waktu']; ?>"
                                class="edit">EDIT</a>
                            <a href="delete.php?id=<?Php echo $baris['id']; ?>" class="hapus">HAPUS</a>
                        <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>