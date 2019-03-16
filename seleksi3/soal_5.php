<?php 
	function jabat($jml){
		$jabat=$jml;
		$hasil=0;
		for ($i=0;$i<$jml;$i++)
		{	$jabat-=1;
			$hasil += $jabat;
		}
		return $hasil;
	}
	echo jabat(4);
 ?>