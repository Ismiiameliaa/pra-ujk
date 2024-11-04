<?php
$json_data = file_get_contents("datatamu.json");
$datatamu = json_decode($json_data, true);

if(isset($_POST["submit"])){
    $data_baru=[
        "nama" => $_POST["nama"],
        "email" => $_POST["email"],
    ];

$datatamu[]=$data_baru;
$json_data_baru=json_encode($datatamu, JSON_PRETTY_PRINT);
file_put_contents("datatamu.json", $json_data_baru);
header("location: read.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Input</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100px;
        }
        .container{
            width: 900px; /* Fixed width */
            margin: auto; /* Center container horizontally */
            background: antiquewhite;
        }
        header{
            background: linear-gradient(to right, #80a6a6, #8070b8);
            color: white;
            text-align: center;
            padding: 5px;
        }
        nav{
            padding: 10px;
            margin-bottom: 20px;
            text-align: left;
        }
        nav a{
            margin: 15px;
            text-decoration: none;
            color: white;
        }
        nav a:hover{
            text-decoration: underline;
        }
        .form{
            background-color: antiquewhite;
            padding: 30px;
            margin-bottom: 150px;
            margin-top: 30px;
        }
        table{
            padding: 5px;
            margin-bottom: 100px;
            margin-top: 50px;
        }
        label{
            color: navy;
            font-weight: bold;
            margin-left: 200px;
        }
        input {
            margin: 10px 0;
            color: navy;
            padding: 10px;
            width: 50%;
            background: white;
            border: none;
            margin-right: 400px;
            margin-left: 60px;
        }
        button {
            padding: 10px 15px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 310px;
        }
        button:hover {
            background: #707070;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="create.php">Form input</a>
                <a href="read.php">Data Tamu</a>
            </nav>
        </header>

        <center><h3>FORM INPUT DATA TAMU</h3></center>

        <form action="" method="post">
            <table>
                <tr>
                    <td class="label"><label for="nama"></label>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td class="label"><label for="nama"></label>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td colspan="3">
                    <button type="submit" name="submit">Simpan</button>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>