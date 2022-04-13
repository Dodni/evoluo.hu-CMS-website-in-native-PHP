<?php

class Ujblog_Controller
{
    public $baseName = 'ujblog';
	public function main(array $vars)
	{
		$ujblogModel = new Ujblog_Model;
		$retData = $ujblogModel->get_data($vars);
		
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "blog";

		$view = new View_Loader($this->baseName.'_main');

		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>