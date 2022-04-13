<?php

class Admin_Beallitasok_Controller
{
	public $baseName = 'admin_beallitasok';  //meghat�rozni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
        //betöltjük az admin blogok nézetet
		$view = new View_Loader($this->baseName."_main");
	}
}