<!DOCTYPE html>
<html>
<head>
	<title>Konversi Waktu</title>
</head>
<style type="text/css">
	.border {
		border-style: solid;
		padding-left: 270px;
		border-radius: 10px;
		margin-left: 250px;
		margin-right: 250px;
		margin-top: 100px;
		background-color: white;
	}

		.border-bawah {
		border-style: solid;
		padding-left: 10px;
		border-radius: 10px;
		margin-left: 250px;
		margin-right: 250px;
		margin-top: 0;
		background-color: white;
	}
</style>
<body style="background-image: url('jam.jpg'); background-attachment: fixed; background-size: 100%;">
<div class="border">
	<p><h2><u>Konversi Waktu</u></h2></ali</p>
</div>
<div class="border-bawah">
	<p><h3><u>Jam ke menit</u></h3></ali</p>
	<p><form method="post"><input type="number" name="jam" placeholder="Masukan Jam" value=""> <button type="submit" name="sub"  style="height: 20px;">Submit</button></form></p>
	<p><h3>Hasil</h3></p>
	<p><?php
if(isset($_POST['sub'])){
	$jam = $_POST['jam'];
	$menit = 60;
	if ($hitung = $jam * $menit){
		echo  number_format($hitung)." Menit ";
	}
} 
?></p>
<div style="padding-bottom: 20px;">
<a href="index.php"><button style="height: 30px; background-color: green; color: white;">Home</button></a>
<a href="profil.php"><button style="height: 30px; background-color: blue; color: white;">Profil</button></a>
	
</div>
</div>

</body>
</html>