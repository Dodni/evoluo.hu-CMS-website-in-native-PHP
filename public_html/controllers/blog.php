<?php

class Blog_Controller
{
	public $baseName = 'blog';  //meghat�rozni, hogy melyik oldalon vagyunk
	
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$aloldal = isset($vars[0]) ? $vars[0] : "blog";
		$blog_model = new Blog_Model();

		if ($aloldal == 'blog') {
			$retData = $blog_model -> get_data();
			$view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
				$view->assign($name, $value);
		} else if (is_numeric($aloldal)){
			//az aloldal mutatására szolgáló elágazás
			$retData = $blog_model -> mutat($aloldal);
			$view = new View_Loader($this->baseName."_aloldal_main");
			
			//atadni a viewnak az adatokat
			foreach($retData as $name => $value)
				      $view->assign($name, $value);

		}
		
	}
}

?>