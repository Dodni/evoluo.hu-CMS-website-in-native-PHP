<?php
//a blog update funkcióra készített controller
class Edited_Controller
{
    public $baseName = 'edited';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//var_dump($vars);
		//$view = new View_Loader($this->baseName."_main");
		// echo "</br>";
		// echo $vars['updatemenu'];
		// echo is_null($vars['updatemenu']);
		// echo "</br>";

		
		if (is_numeric($vars['id'])) {
			//echo "is numeric";
			$blogokmodel = new Blogok_Model;
        	$retData = $blogokmodel -> edit($vars);
        	$view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
				$view->assign($name, $value);
		} elseif (is_string($vars['szulo'])) {
			//echo "is string";
			$menupontmodel = new Menupont_Model;
        	$retData = $menupontmodel -> menupontModosit($vars);
        	$view = new View_Loader($this->baseName."_main");

		}
        
	}
}

?>