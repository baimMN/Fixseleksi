<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery.min.js"></script>
	<script src="jquery-3.3.1.slim.min.js"></script>
	<script src="popper.js"></script>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
	<div class="bg"></div>
	<div class="row justify-content-center judul"><h1>Table Produk</h1></div>
	<hr style="border: 1px solid black" />
	<div class="row justify-content-center"> 
		<h3><div class="">Tambah Kategori</div></h3>
	</div>
	<div class="row kat justify-content-center">
		<form action="#" class="iniform justify-content-center" name="kirim" method="post">
			<input type="text" name="namakat" placeholder="        nama kategori" class="inikat"><br/>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<button class="btn btn-primary m-3 test" name="kirim">+</button>
		</form>

	<div class="w-100"></div>



		<h1 class="msg">
		<?php 
			
			if(isset($_POST['kirim']))
			{	include "./koneksi.php";
				$namakat = $_POST['namakat'];
				$query=mysqli_query($co,"insert into categories value('','$namakat')");	
				if($query > 0)
				{
					echo "Input Berhasil";
				}
				else {echo "gagal input";}
			}
			
		 ?>
		</h1>
	 </div>
	<?php include "./table.php"; ?>
</div>
</body>
</html>