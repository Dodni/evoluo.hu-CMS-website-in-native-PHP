<?php
//a blog update funkcióra készített controller
class Edit_Controller
{
    public $baseName = 'edit';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//var_dump($vars);
        $blogokmodel = new Blogok_Model;
        $menupontmodel = new Menupont_Model;
        
		if (is_numeric($vars['id'])) {
			$retData = $blogokmodel -> getOne($vars);
        	$view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
				$view->assign($name, $value);
		} elseif (is_string($vars['url'])) {
			//echo "url vagyok";
			//var_dump($vars);
			$retData = $menupontmodel -> getOne($vars);
			//var_dump($retData);
        	$view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
				$view->assign($name, $value);

		}
        
        
			
	}
}

?>