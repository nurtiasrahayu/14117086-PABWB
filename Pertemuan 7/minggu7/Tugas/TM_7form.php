<!DOCTYPE html>
<html>
<head>
	<title> Form Biodata </title>
</head>

<body>
<form action="TM_7hasil.php" method="GET">

<label>Nama : </label>
<input type="text" name="nama" required><br>

<label> Alamat : </label>
<input type="text" name="alamat"><br>

<br><label> Jenis kelamin : </label>
<input type="radio" name="jk" value="laki-laki"> Laki-laki
<input type="radio" name="jk" value="perempuan"> Perempuanerempuan

<br><label> Golongan darah : </label>
<select name = "golongan">
<option value="A">A</option>
<option value="AB">AB</option>
<option value="O">O</option>
<option value="B">B</option>
</select><br>
        
<br><label>Hobby : </label><br>
<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
<input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi<br>
<input type="checkbox" name="hobi[]" value="Menari">Menari<br>
           
<br><label>Keterangan : </label>
<textarea name= "Ket"> </textarea><br>
<input type="submit" value="submit">

</form>
</body>
</html>