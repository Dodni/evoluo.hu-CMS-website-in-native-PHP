<?php
//blog törlésére használt kontroller
class Delete_Controller
{
    public $baseName = 'delete';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//var_dump($vars);
        $blogokmodel = new Blogok_Model;
        $blogokmodel -> delete($vars);
        
        //bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName."_main");
	}
}

?>