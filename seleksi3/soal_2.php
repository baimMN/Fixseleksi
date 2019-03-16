<?php 
function pw($pw) {

	function pwcek($pw)
	{
		$new=str_split($pw);
		$cek3=0;
		$cek1=0;
		$cek2=0;
		$cond=strlen($pw) + 1;
		for($i=0; $i < strlen($pw) ;$i++)
		{
			if (strcmp($new[$i],strtolower($new[$i])) )
			{
				$cek1+= 1;
			}

			elseif (strcmp($new[$i],strtoupper($new[$i])))
			{
				$cek2+= 1;
			}

			elseif (is_numeric($new[$i]) )
			{
				$cek3+= 1;
			}
		}
		echo $cek1.$cek3.$cek3;
		if ($cek1 == 0 or $cek2 == 0 or $cek3 == 0  )
			{return false;}
		else
			{return true;}
	}
	if (strlen($pw) !== 8)
	{
		return false;
	}

	elseif (str_word_count($pw) == 0 )
	{
		return false;
	} 

	else if (pwcek($pw) !== true) 
	{
		return false;
	}	
	elseif (preg_match('/[\'^£$%&*][()}{@#~?><>,|=_+¬-]/', $pw) == 0)
	{
		return false;
	}

	else {return true;}
}

echo var_dump(pw('123af$#H'))

 ?>