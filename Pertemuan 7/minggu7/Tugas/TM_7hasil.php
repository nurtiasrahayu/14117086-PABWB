<body>

<?php
    $nama = $_GET["nama"];
    $alamat = $_GET["alamat"];
    $jenis_kelamin = $_GET["jk"];
    $goldar = $_GET["golongan"];
	$keterangan = $_GET["Ket"];
	$hobi = $_GET["hobi"];
    
	echo "Nama : $nama </br>";
    echo "Alamat :$alamat </br>";
    echo "Jenis Kelamin : $jenis_kelamin </br>";
    echo "Golongan Darah : $goldar </br>";
    echo "Hobbi : " ;
    foreach ($hobi as $h) {
              echo "$h ";
            }
    echo "</br>Keterangan : $keterangan </br>";
?>  
</body>