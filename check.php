<?php 
class show{
	public function users($varOne){
		print $varOne.'1';
	}
}
class later extends show{
	public function users($varOne,$varTwo){
		print '2'.$varTwo.$varOne;
	}
}
$lt = new later;
$lt->users('Main');
$lt->users('Main','Child');
?>