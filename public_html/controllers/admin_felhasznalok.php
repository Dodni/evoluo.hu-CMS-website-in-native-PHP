<?php

class Admin_Felhasznalok_Controller
{
	public $baseName = 'admin_felhasznalok';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//bet�ltj�k a n�zetet
		//$view = new View_Loader($this->baseName."_main");
		$adminmodel = new Admin_Model;
		$retData = $adminmodel -> adminLekerMind();
		//var_dump($retData['leker']);
		$view = new View_Loader($this->baseName."_main");
		foreach($retData as $name => $value)
			$view->assign($name, $value);
		//var_dump($vars);

		
	}
}

?>