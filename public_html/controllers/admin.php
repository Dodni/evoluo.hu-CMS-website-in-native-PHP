<?php

class Admin_Controller
{
	public $baseName = 'admin';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName."_main");
		$adminmodel = new Admin_Model;
		$menupontmodel = new Menupont_Model;
		$filegeneratemodel = new Menupont_Model;
		//var_dump($vars);

		if ($vars[0] == "regisztraciosikeres") {
			//echo "ittvagyook-regisztaciosikeres";
			$adminmodel -> adminLetrehoz($vars);

		} elseif ($vars[0] == "modositassikeres") {
			//echo "ittvagyook-modositassikeres";
			$adminmodel -> adminModosit($vars);
		} elseif ($vars[0] == "torlessikeres") {
			//echo "ittvagyook-torlessikeres";
			$adminmodel -> adminTorol($vars);
		}

		if ($vars[0] == "menupontletrehozas") {
			//echo "ittvagyook-menupontletrehozas";
			$menupontmodel -> menupontLetrehoz($vars);
			 //var_dump($vars);
			 //echo "</br>";
			//echo $vars['url'];echo "</br>";
			//echo $vars['szulo'];echo "</br>";
			//echo $vars['tartalom'];echo "</br>";
			$file = 'controllers/filegenerate.php';
			//echo "itt vagyok ";
			//echo $file;
			if(file_exists($file))
			{ //echo "file load success.";
			include_once($file); }
			else{ 
				//echo "File load error";
				die("File '$file' containing class '$className' not found."); }
			//echo "itt vagyok";
			$filegenerate = new Filegenerate_Controller;
			$filegenerate -> main($vars);
			//echo "itt vagyok";

		} elseif ($vars[0] == "menupontmodositas") {
			//echo "ittvagyook-menupontmodositas";
			$menupontmodel -> menupontModosit($vars);
		} elseif ($vars[0] == "menuponttorles") {
			//echo "ittvagyook-menuponttorles";
			$menupontmodel -> menupontTorol($vars);
		}

	}
}

?>