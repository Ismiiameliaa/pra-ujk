<?php

$json_data = file_get_contents("datatamu.json");
$datatamu = json_decode($json_data, true);

$i = 1;
$indeks = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Output (Data Tamu)</title>
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
table{
   padding: 5px;
   margin-bottom: 100px;
   margin-top: 50px;
   border-collapse: collapse; 
   margin-left: 50px;
   width: 60%;
}
.jud th{
    padding: 10px;
    text-align: left;
}
.is td{
    padding: 5px;
    text-align: left;
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

        <center><h3>DATA TAMU</h3></center>

        <table border="1">
            <tr class="jud">
                <th>No</th>
                <th>NAMA</th>
                <th>EMAIL</th>
            </tr>
            <?php foreach ($datatamu as $dtt) { ?>
            <tr class="is">
                <td>
                    <center><?=$i++?></center>
                </td>
                <td>
                    <?=$dtt["nama"]?>
                </td>
                <td>
                    <?=$dtt["email"]?>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>