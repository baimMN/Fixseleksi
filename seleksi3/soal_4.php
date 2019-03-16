<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Kembalian Anda</h1></p>
	<?php 
	function toko($belanja,$uang)
	{	
		$rp500=0;
		$rp1k=0;
		$rp2k=0;
		$rp5k=0;
		$rp10k=0;
		$rp20k=0;
		$rp50k=0;
		$kembali= $uang - $belanja;

		while ( $kembali-50000 > 0)
		{
			$rp50k+=1;
			$kembali-=50000;
		}

		while ( $kembali-20000 > 0)
		{
			$rp20k+=1;
			$kembali-=20000;
		}
		while ( $kembali-10000 > 0)
		{
			$rp10k+=1;
			$kembali-=10000;
		}
		while ( $kembali-5000 > 0)
		{
			$rp5k+=1;
			$kembali-=5000;
		}
		while ( $kembali-2000 > 0)
		{
			$rp2k+=1;
			$kembali-=2000;
		}
		while ( $kembali-1000 > 0)
		{
			$rp1k+=1;
			$kembali-=1000;
		}
		while ( $kembali-500 > 0)
		{
			$rp500+=1;
			$kembali-=500;
		}

		$kembalian = array();
		if($rp50k > 0){
			$obj=new stdClass();
			$obj->nominal= 50000;
			$obj->jumlah= $rp50k;
			array_push($kembalian, $obj);
		}
		if($rp20k > 0){
			$obj=new stdClass();
			$obj->nominal= 20000;
			$obj->jumlah= $rp20k;
			array_push($kembalian, $obj);
		}
		if($rp10k > 0){
			$obj=new stdClass();
			$obj->nominal= 10000;
			$obj->jumlah= $rp10k;
			array_push($kembalian,$obj);
		}
		if($rp5k > 0){
			$obj=new stdClass();
			$obj->nominal= 5000;
			$obj->jumlah= $rp5k;
			array_push($kembalian, $obj);
		}
		if($rp2k > 0){
			$obj=new stdClass();
			$obj->nominal= 2000;
			$obj->jumlah= $rp2k;
			array_push($kembalian, $obj);
		}
		if($rp1k > 0){
			$obj=new stdClass();
			$obj->nominal= 1000;
			$obj->jumlah= $rp1k;
			array_push($kembalian, $obj);
		}
		if($rp500 > 0){
			$obj=new stdClass();
			$obj->nominal= 500;
			$obj->jumlah= $rp500;
			array_push($kembalian, $obj);
		}
		return $kembalian;
	}

	
foreach(toko(30000,200000) as $k):
 ?>
	<?php echo $k->jumlah ?> Lembar <?php echo $k->nominal ?> <br/>

 <?php endforeach; ?>
</body>
</html>

