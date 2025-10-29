<!DOCTYPE html>
<html>
<head>
    <title>Hasil Hitung Karakter</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>
    <?php
    if (isset($_POST['teks'])) {
        $teks = $_POST['teks'];
        $jumlah = strlen($teks);
        echo "Teks yang Anda masukkan: <b>$teks</b><br>";
        echo "Jumlah karakter: <b>$jumlah</b>";
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>
</body>
</html>