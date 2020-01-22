<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUT</title>
</head>
<body>
	<center>
	<h2>Kalkulator BMI dan Berat Badan</h2>
<form action="read.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><input type="number" name="umur" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="gender">
					<option value="Perempuan">Perempuan</option>
					<option value="Laki-Laki">Laki-Laki</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Berat Badan (kg)</td>
			<td>:</td>
			<td><input type="number" name="berat" required></td>
		</tr>
		<tr>
			<td>Tinggi Badan (cm)</td>
			<td>:</td>
			<td><input type="number" name="tinggi" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
</center>
</body>
</html>
