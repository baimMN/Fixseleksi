<?php 
function biodata() {
	$adres ="gorda";
	$name= "baim";
	$hobi= array("ngoding","ngegame","jajan");
	$maried = false;
	$school = array('highschool' => 'smkn51' , 'university' => 'ugm(aamiin)' );
	$newschool = (object) $school;

	$skil1 = new stdClass(); 
	$skil1->makan= true;
	$skil2 = new stdClass(); 
	$skil2->minum= true;
	$skill = array($skil1,$skil2);

	$biodata = new stdClass();
	$biodata->name = $name;
	$biodata->address = $adres;
	$biodata->maried = $maried;
	$biodata->school = $newschool;
	$biodata->skill = $skill;

	return json_encode($biodata);
	
}
 echo biodata();
 ?>