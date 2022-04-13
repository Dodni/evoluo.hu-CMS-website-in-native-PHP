<?php

class Admin_Menupontok_Controller
{
	public $baseName = 'admin_menupontok';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//bet�ltj�k a n�zetet
		//$view = new View_Loader($this->baseName."_main");
		
		$menupont_model = new Menupont_Model;
		$retData = $menupont_model -> menuGetAll();
			$view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
			{
				$view->assign($name, $value);
				//var_dump($view);
			}
				
	}
}

?>