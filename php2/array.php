<form method="POST" action="">
  Pilih Hobby Kamu:
  <br>
  <input name="hobby[]" type="checkbox" value="Membaca">Membaca<br>
  <input name="hobby[]" type="checkbox" value="Menulis">Menulis<br>
  <input name="hobby[]" type="checkbox" value="Melukis">Melukis<br>
  <input name="hobby[]" type="checkbox" value="Fotografi">Fotografi<br>
  <input name="hobby[]" type="checkbox" value="Programming">Programming<br>
  <input name="hobby[]" type="checkbox" value="Otomotif">Otomotif<br>
  <input name="hobby[]" type="checkbox" value="Musik">Musik<br>
  <input name="hobby[]" type="checkbox" value="Menyanyi">Menyanyi<br>
  <input type="submit" value="Proses">
</form>

<?php
echo "Hobby yang Kamu Pilih:<br>";
$hobby = $_POST['hobby'];
$jumlah_hobby = count($hobby);
for ($indeks = 0; $indeks < $jumlah_hobby; $indeks++) {
    echo "$hobby[$indeks] <br>";
}
?>