<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Koneksi database dengan mysql_fetch_assoc</h1>

<?php

$conn=mysqli_connect ("localhost","root","")
	or die ("koneksi gagal");
mysqli_select_db($conn, "latihan");
$hasil = mysqli_query($conn, "select * from Liga");
while ($row=mysqli_fetch_row($hasil)) {
	echo "Liga " .$row["negara"]; //array asosiatif
	echo " mempunyai " .$row[2]; //array numeris
	echo " wakil di liga champion <br>";
}
?>
</body>
</html>