<?php
class Uzenettorles_Controller
{
   	public $baseName = 'uzenettorles';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		//var_dump($vars);
	        $beallitasmodel = new Beallitasok_Model;
	        $view = new View_Loader($this->baseName."_main");
		$beallitasmodel->emailTorol($vars);
	}
}

?>