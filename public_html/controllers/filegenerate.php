<?php

class Filegenerate_Controller
{
	public $baseName = 'filegenerate';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		//bet�ltj�k a n�zetet
		//$view = new View_Loader($this->baseName."_main");

		//CONTROLLER GENERATE START HERE
	//		var_dump($vars);
		//echo "itt vagyok";
		$urlname = '';
		$urlname .= $vars['url'];
		$szulo = '';
		$szulo .= $vars['szulo'];
		$tartalom = '';
		$tartalom .= $vars['tartalom'];
		$nev = '';
		$nev .= $vars['nev'];
		//echo $nev;		

		//echo "----------------</br>";
		//echo $urlname;
		//echo "</br>";
		//echo $szulo;
		//echo "</br>";
		//echo $tartalom;
		//echo "</br>";
		//echo "</br>";
		
		if ($szulo != '') {
			//echo "NEM üres szülő vagyok";
			$seged = "";
			$seged .= $szulo;
			$seged .= '_';
			$seged .= $urlname;
			$urlname = $seged;
		}
		//echo "itt vagyok";
		$controllername = "";
		$controllername .= $urlname;
		$controllernamelower = strtolower($controllername);
		$controllername .= '_Controller';
		$controllerFileName = $urlname.'.php';
		//echo $controllerFileName;


		$myfile = fopen("controllers/$controllerFileName", "w") or die("Unable to open file!");

		$txt = "<?php
		//Ez egy generált kontroller!
		class $controllername
		{
			public \$baseName = '$controllernamelower';
			public function main(array \$vars)
			{
				\$view = new View_Loader(\$this->baseName.'_main');
			}
		}
		?> ";

		fwrite($myfile, $txt);
		fclose($myfile);
		//END


		//VIEW GENERATE START HERE
		$viewname = "";
		$viewname .= $urlname;
		//echo $viewname;
		$viewnamelower = strtolower($viewname);
		$main = '_main.php';
		$filename2 = "";
		$filename2 .= $viewnamelower;
		$filename2 .= $main;
		//echo $filename2;

		$urlname = '';
		$urlname .= $vars['url'];

		$myfile2 = fopen("./views/$filename2", "w") or die("Unable to open file!");
		
		$txt = "<?php
		//Ez egy generált view!
		echo '<title>$nev</title>';
		Kiolvas_Model::get_data('$urlname');
		?> ";
		fwrite($myfile2, $txt);
		fclose($myfile2);
		//END
		

	}
}

?>