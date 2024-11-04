<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiatif</title>
</head>
<body>
        <?php
        // mendefinisikan array asosiatif
        $peserta = [
            "Agus" => 20,
            "Shinta" => 25,
            "Riska" => 18
        ];

        ksort($peserta);

        foreach ($peserta as $nama => $umur){
            echo
            "<tr>
                <td>$nama :</td>
                <td>$umur ,</td>
                <br>
            </tr>";
        }
        ?>
</body>
</html>