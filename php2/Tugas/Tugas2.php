<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kontak</title>
</head>
<body>
    <h2>Data Kontak</h2>
    <?php
    $kontak = [
        "Nama" => "Wildan Muafan",
        "Email" => "wildanmuafannn@gmail.com",
        "Telepon" => "081527446779"
    ];

    foreach ($kontak as $key => $value) {
        echo "<b>$key</b>: $value<br>";
    }
    ?>
</body>
</html>