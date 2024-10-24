<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:readtamu.php');
}

$json_data = file_get_contents ("datatamu.json");
$datatamu = json_decode($json_data, true);

date_default_timezone_set('Asia/Makassar');
$waktu = date ('Y-m-d H:i A');

if(isset($_POST['submit'])){

    $telepon = $_POST["telepon"];

    if (substr($telepon, 0, 20) != "+6"){
        $telepon = "+62" . ltrim($telepon, '0'); //menghapus 0 di depan
    }

    $data_baru=[
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"],
        "telepon" => $telepon, //gunakan nomor yang sudah diproses
        "pilihan" => $_POST["pilihan"],
        "jk" => $_POST["jk"],
        "komentar" => $_POST["komentar"],
        "tanggal_jam" => $waktu,
    ];

$datatamu[]=$data_baru;
$json_data_baru=json_encode($datatamu, JSON_PRETTY_PRINT);
file_put_contents("datatamu.json", $json_data_baru);
header("location:readtamu.php");   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form action="">
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telepon"></td>
        </tr>
        <tr>
            <td>Pilihan</td>
            <td>:</td>
            <td>
            <select name="pilihan">
                <option>Umum</option>
                <option>Anggota</option>
                <option>Tamu</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td colspan="3">
            <center>   
                <input type="radio" name="jk" value="Laki-Laki"><label for="">Laki-Laki</label>
                <input type="radio" name="jk" value="Perempuan"><label for="">Perempuan</label></td>
                <!-- <td></td> -->
                <!-- <td></td> -->
            </center> 
        </tr>     
        <tr>
            <td>Komentar</td>
            <td>:</td>
            <td><textarea name="komentar"></textarea></td>
        </tr>
        <tr>
            <td colspan="3">
            <button type="submit" name="submit">Simpan</button> 
        </tr>
        </table>
    </form>
</body>
</html>