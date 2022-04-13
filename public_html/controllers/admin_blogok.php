<?php

class Admin_Blogok_Controller
{
	public $baseName = 'admin_blogok';  //meghat�rozni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
        //betöltjük az admin blogok nézetet
		//$view = new View_Loader($this->baseName."_main");

		$aloldal = isset($vars[0]) ? $vars[0] : "blogok";
		$blogok_model = new Blogok_Model();

		if ($aloldal == 'blogok') {
			$retData = $blogok_model -> get_data();
			$view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
				$view->assign($name, $value);
		}

		//$blogok_model -> delete();
        
	}
}


/*
		else if (is_numeric($aloldal)){
			//az aloldal mutatására szolgáló elágazás
			$retData = $blogok_model -> mutat($aloldal);
			$view = new View_Loader($this->baseName."_aloldal_main");
			
			//atadni a viewnak az adatokat
			foreach($retData as $name => $value)
				      $view->assign($name, $value);

		}
		*/

?>