
 <?php 
function kotak($len) {
	$b="*";
	$e="=";
	$result="";
	for ($i=1;$i <= $len;$i++){
		
		if ($i== 1 or $i == $len)
		{
			$result= "* *";
		}
		else {$result= "= =";}

		$awal= str_repeat(" =", $len - 2);
		$aspasi= $len*2 - 1;
		$akhir= substr_replace($result,$awal,1,0);
		$final= substr_replace($akhir,"*", $aspasi/2-0.5,1);
		if($i == $len/2-0.5+1)
		{
			$final=str_repeat("* ", $len);
		}
		echo "$final <br/> ";
	}
}

printf(kotak(13));
?>
	