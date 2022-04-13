<?php
//a blog update funkcióra készített controller
class Menuponttorles_Controller
{
    public $baseName = 'menuponttorles';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//var_dump($vars);
        //$blogokmodel = new Blogok_Model;
        $menupontmodel = new Menupont_Model;
        $view = new View_Loader($this->baseName."_main");
		$menupontmodel->menupontTorol($vars);
        echo '<script type="text/JavaScript"> 
		setTimeout(
		function() 
		  {
		    window.open("https://evoluo.hu/admin/menupontok","_self")
		  }, 1000);
		</script>';
        
			
	}
}

?>