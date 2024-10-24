<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:logintamu.php');
}

$json_data = file_get_contents('datatamu.json');
$datatamu = json_decode($json_data, true);

$i = 1;
$indeks = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Pilihan Sebagai</th>
            <th>Jenis Kelamin</th>
            <th>Komentar</th>
            <th>Tanggal & Jam Masuk</th>
        </tr>
        <?php foreach ($datatamu as $dtm) { ?>
            <tr>
                <td>
                    <?=$i++?>
                </td>
                <td>
                    <?=$dtm['nama']?>
                </td>
                <td>
                    <?=$dtm['alamat']?>
                </td>
                <td>
                    <?=$dtm['telepon']?>
                </td>
                <td>
                    <?=$dtm['pilihan']?>
                </td>
                <td>
                    <?=$dtm['jk']?>
                </td>
                <td>
                    <?=$dtm['komentar']?>
                </td>
                <td>
                    <?=$dtm['tanggal_jam']?>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>