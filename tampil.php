<html>
    <head>
        <link rel="icon" href="beluga-modified.png">
	    <title>Lingkaran</title>
    </head>
    <body>
<?php 
// menangkap data nama dengan method post
$r = $_POST['r'];
$phi = 3.14;
$luas = $phi * $r ** 2;
$keliling = 2 * $phi * $r;
 
// menampilkan data sisi persegi
echo "Diketahui :<br>";
echo "Jari-jari Lingkaran = " . $r;
echo "<br/>";
echo "Phi = $phi <p>";
echo "Rumus Keliling Lingkaran :<br>";
echo "2 x phi x jari-jari | 2 x $phi x $r <p>";
echo "Rumus Luas Lingkaran :<br>";
echo "Phi x jari-jari x jari-jari | $phi x $r x $r <p>";
//menampilkan data keliling persegi
echo "Dijawab :<br>";
echo "Keliling Lingkaran = $keliling";
echo "<br>";
// menampilkan data luas persegi
echo "Luas Lingkaran = $luas";
echo "<br>";
?>
<br>
<a href="http://localhost/belajarphp/lingkaran/luaslingkaran.php">
    <button>
        Kembali
</button>
</a>
</body>
</html>