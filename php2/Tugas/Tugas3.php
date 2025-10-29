<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>

    <form method="post">
        Angka 1: <input type="number" name="angka1" required><br><br>
        Angka 2: <input type="number" name="angka2" required><br><br>

        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
        <input type="submit" name="kali" value="Kali">
        <input type="submit" name="bagi" value="Bagi">
    </form>

    <hr>
    <?php
    function tambah($a, $b) { return $a + $b; }
    function kurang($a, $b) { return $a - $b; }
    function kali($a, $b) { return $a * $b; }
    function bagi($a, $b) { 
        return $b != 0 ? $a / $b : "Error: Pembagi tidak boleh 0!";
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = "";

        if (isset($_POST['tambah'])) {
            $hasil = tambah($angka1, $angka2);
            echo "Hasil Penjumlahan: <b>$hasil</b>";
        } elseif (isset($_POST['kurang'])) {
            $hasil = kurang($angka1, $angka2);
            echo "Hasil Pengurangan: <b>$hasil</b>";
        } elseif (isset($_POST['kali'])) {
            $hasil = kali($angka1, $angka2);
            echo "Hasil Perkalian: <b>$hasil</b>";
        } elseif (isset($_POST['bagi'])) {
            $hasil = bagi($angka1, $angka2);
            echo "Hasil Pembagian: <b>$hasil</b>";
        }
    }
    ?>
</body>
</html>