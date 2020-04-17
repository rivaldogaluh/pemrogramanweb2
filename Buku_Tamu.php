<html>

<head>
    <title> Buku Tamu Tanpa Database </title>
</head>

<body>
    <h2> BUKU TAMU</h2>
    <hr>
    Terima kasih atas kunjungan anda, silakan mengisi buku tamu, sebelum berkomentar :
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
        <pre>
Nama		: <input type="text" name="Nama"><br>
Alamat		: <input type="text" name="Alamat" size="40"><br>
Kota		: <input type="text" name="Kota" size="40"><br>
Kode POS	: <input type="text" name="KodePos" size="8"><br>
Propinsi 	: <select name="pilih">
				<option>Banten</option>
				<option>Jawa Barat</option>
				<option>Jawa Timur</option>
				<option>Jawa Tengah</option>
			</select><br>
E-Mail		: <input type="text" name="E-Mail" size="40"><br>
Komentar 	: <textarea name="komentar" rows=4 cols="36"></textarea><br>
<p>
<input type=submit value="Kirim Data" name="submit"> <input type=reset value="Hapus Data">
</form>
<?php
@$nama = $_GET['Nama'];
@$alamat = $_GET['Alamat'];
@$kota = $_GET['Kota'];
@$kodepos = $_GET['KodePos'];
@$propinsi = $_GET['pilih'];
@$email = $_GET['E-Mail'];
@$komentar = $_GET['komentar'];

if (!empty($_GET['submit'])) {
    echo "Nama : " . $nama . "<br>";
    echo "Alamat : " . $alamat . "<br>";
    echo "Kota : " . $kota . "<br>";
    echo "Kode Pos : " . $kodepos . "<br>";
    echo "Propinsi : " . $propinsi . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Komentar : " . $komentar . "<br>";
}
?>