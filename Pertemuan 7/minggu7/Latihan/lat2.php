<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>

<body>
  <form action="" method="GET">
    <input type="text" name="nama" placeholder="nama . . .">
    <input type="text" name="warna" placeholder="warna . . .">
    <button type="submit" name="order">Order</button>
    <br>
  </form>
 
 <?php
     $nama=  $_GET["nama"];
     $warna= $_GET["warna"];
  
     $panjang = strlen($nama);
     $total=0;
     if($panjang >= 1 && $panjang <= 10){
          $total=$panjang*300;
          if($warna == "biru"){
             echo "Nama : <div style='color: blue'>$nama </div> ";
			 echo "Harga : $total </br>";
          }elseif($warna == "kuning"){
             echo"Nama : <div style='color: yellow'>$nama </div>";
			 echo"Harga : $total </br>";
          }elseif($warna == "hijau"){
              echo "Nama : <div style='color: green'>$nama </div>";
			  echo "Harga : $total </br>";
          }elseif($warna == ""){
             echo "Nama : <div style='color: red'>$nama </div> ";
			 echo"Harga : $total </br>";
          }
      }elseif($panjang >= 11 && $panjang <= 20){
          $total=$panjang*500;
          if($warna == "biru"){
              echo"Nama : <div style='color: blue'>$nama </div> ";
			  echo"Harga : $total </br>";
          }elseif($warna == "kuning"){
              echo"Nama : <div style='color: yellow'>$nama </div> ";
			  echo"Harga : $total </br>";
          }elseif($warna == "hijau"){
              echo "Nama : <div style='color: green'>$nama </div> ";
			  echo"Harga : $total </br>";
          }elseif($warna == ""){
              echo "Nama : <div style='color: red'>$nama </div> ";
			  echo"Harga : $total </br>";
          }
      }elseif($panjang > 20){
          $total=$panjang*700;
         if($warna == "biru"){
              echo"Nama : <div style='color: blue'>$nama </div> ";
			  echo"Harga : $total </br>";
          }elseif($warna == "kuning"){
              echo"Nama : <div style='color: yellow'>$nama </div> ";
			  echo"Harga : $total </br>";
          }elseif($warna == "hijau"){
              echo "Nama : <div style='color: green'>$nama </div> ";
			  echo"Harga : $total </br>";
          }elseif($warna == ""){
              echo "Nama : <div style='color: red'>$nama </div> ";
			  echo"Harga : $total </br>";
          }
      }

?>

</body>
</html>