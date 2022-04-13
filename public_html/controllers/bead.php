<?php

class Bead_Controller
{
	public $baseName = 'bead';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName."_main");
        $beadmodell = new Bead_Model;
		//var_dump($vars);
        $beadmodell -> beadBeallit($vars);
        
	}
}

?>