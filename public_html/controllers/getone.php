<?php
//a blog update funkcióra készített controller
class GetOne_Controller
{
    public $baseName = 'edit';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//var_dump($vars);
        $blogokmodel = new Blogok_Model;
        //MÉG NEM UPDATE-ELI A VÁLTOZÓKAT CSAK KILISTÁZZA AZ ID ADATAIT!!!
        $retData = $blogokmodel -> getOne($vars);
        $view = new View_Loader($this->baseName."_main");
			foreach($retData as $name => $value)
				$view->assign($name, $value);
        
			
	}
}

?>