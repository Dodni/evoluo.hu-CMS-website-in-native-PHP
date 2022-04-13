<?php

Class Menu {
    public static $menu = array();
    
    public static function setMenu() {
        self::$menu = array();
        $connection = Database::getConnection();
        $stmt = $connection->query("select url, nev, szulo, jogosultsag from menu where jogosultsag like '".$_SESSION['userlevel']."'order by sorrend");
        while($menuitem = $stmt->fetch(PDO::FETCH_ASSOC)) {
            self::$menu[$menuitem['url']] = array($menuitem['nev'], $menuitem['szulo'], $menuitem['jogosultsag']);
        }
    }

    public static function getMenu($sItems) {
        $submenu = "";
        
        $menu = "<ul>";
        foreach(self::$menu as $menuindex => $menuitem)       
        {
            if($menuitem[1] == "")
            { $menu.= "<li><a href='".SITE_ROOT.$menuindex."' ".($menuindex==$sItems[0]? "class='selected'":"").">".$menuitem[0]."</a></li>"; }
            else if($menuitem[1] == $sItems[0])
            { $submenu .= "<li><a href='".SITE_ROOT.$sItems[0]."/".$menuindex."' ".($menuindex==$sItems[1]? "class='selected'":"").">".$menuitem[0]."</a></li>"; }
        }
        $menu.="</ul>";
        
        if($submenu != "")
            $submenu = "<ul>".$submenu."</ul>";
        
        return $menu.$submenu;;
    }


    public static function getMenuV2($sItems)
    {
        self::$menu = array();
        $connection = Database::getConnection();
        $stmt = $connection->query("select url, nev, szulo, jogosultsag from menu where jogosultsag like '".$_SESSION['userlevel']."'order by sorrend");
        while($menuitem = $stmt->fetch(PDO::FETCH_ASSOC)) {
            self::$menu[$menuitem['url']] = array($menuitem['nev'], $menuitem['szulo'], $menuitem['jogosultsag']);
            
        }
        $retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "select url, nev, szulo, jogosultsag from menu where jogosultsag like '".$_SESSION['userlevel']."'order by sorrend";
			$stmt = $connection->query($sql);
			$getmenu = $stmt->fetchAll(PDO::FETCH_ASSOC);
			//var_dump($getmenu);
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}

        $eredmeny[]="";
        foreach ($getmenu as $key => $value) {
            
        }
        //var_dump($_SESSION['userlevel']);
        

         for ($i=0; $i < count($getmenu, 0); $i++) { 
             $szulok[] = $getmenu[$i]['szulo'];
             $nev[] = $getmenu[$i]['nev'];
         }
        //print_r(array_unique($szulok));

        //print_r(array_unique($szulok));
         $szam = count($szulok, 0);
         $szulokszama = $szulok;
        for ($i=0; $i < $szam; $i++) {
            if ($szulok[$i] == "") {
                unset($szulokszama[$i]);
            }
        }
       
        //print_r(array_unique($szulokszama));
        $osszesszulo = array_unique($szulokszama);
        $szam = count($osszesszulo, 0);
        
        $menu = '<ul class="navbar-nav">';
        $i=0;
        $szamlalo = 0;
        foreach($getmenu as $menuindex => $menuitem)       
        {
            
            $szuloneve = ($menuitem['url']);         
            //létrehozza a legördülő elemeket
            if ($menuitem['szulo'] == $szulok[$menuindex] ) {
                if ($menuitem['szulo'] != "") {
                    if ($szamlalo < $szam ) {
                        $szamlalo = $szamlalo + 1;
                    
//Visszaadja a menu nevét
$retData['eredmeny']= "";
try {
    $connection = Database::getConnection();
    $sql = "SELECT menu.nev
    FROM menu
    WHERE menu.url = '$szulok[$menuindex]'";
    //echo $sql;
    $stmt = $connection->query($sql);
    $nev = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $retData['nev'] = $nev;
    $retData['eredmeny'] = "OK";
} catch (PDOException $e) {
    $retData['eredmeny'] = "ERROR";
    $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
}

                //megszámolja mennyi az almenü
                    $retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT COUNT(szulo) FROM menu WHERE menu.szulo = '".$szulok[$menuindex]."'";
            //echo $sql;
			$stmt = $connection->query($sql);
			$sqlszulo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['sqlszulo'] = $sqlszulo;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}

        $retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT menu.nev FROM menu WHERE menu.szulo = '".$szulok[$menuindex]."'";
            //echo $sql;
			$stmt = $connection->query($sql);
			$sqlszulonev = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['sqlszulonev'] = $sqlszulonev;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}

        $retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT menu.url FROM menu WHERE menu.szulo = '".$szulok[$menuindex]."'";
            //echo $sql;
			$stmt = $connection->query($sql);
			$sqlurlnev = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['sqlurlnev'] = $sqlurlnev;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}

       			// EZ AZ ÉLŐ NAVBAR!!!!!

 				$menu .= '
				<button  type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      				<span class="visually-hidden">Toggle Dropdown</span>
    				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
				';
				for ($i=0; $i < $retData['sqlszulo'][0]["COUNT(szulo)"]; $i++) { 
                                        $menu .='<li><a class="dropdown-item"  href="'.SITE_ROOT.$szulok[$menuindex].'/'.$retData['sqlurlnev'][$i]['url'].'">'.$retData['sqlszulonev'][$i]['nev'].'</a></li>';
                                    }
				$menu .='</ul>';
                    
                    }
                     
                }else {
                    $menu .= '  <li> 
                                <a id="navcsik" href="'.SITE_ROOT.$menuitem['url'].'" 
                                '.($menuitem['url']==$sItems[0] ? "class='nav-link active' style='background:#A9A9A9' ":"nav-link").'
                                aria-current="page" 
                                >'.$menuitem['nev'].'</a></li>';
                }  
                  
            }
            
            
                
         }


        /*
        return $menu;
            echo $menu;
            if ($menuitem['url'] != "") {
                
                $menu .= '  <li class="nav-item"> 
                            <a id="navcsik" href="'.SITE_ROOT.$menuitem['url'].'" 
                            '.($menuitem['url']==$sItems[0] ? "class='nav-link active'":"nav-link").'
                            aria-current="page" 
                            >'.$menuitem['nev'].'</a></li>';
                
            } 
         
        foreach ($c as $key => $value) {
            $menu .='<li class="nav-item dropdown">
            <a id="navcsik" class="nav-link dropdown-toggle" href="'.SITE_ROOT.$menuitem['url'].'" 
            '.($menuitem['url']==$sItems[0] ? "class='nav-link active'":"nav-link").'
            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            '.$value.'</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a id="navcsik" class="dropdown-item" href="#">'.$menuitem['nev'].'</a></li>
                </ul>
            </li>
            ';
        }
        
        foreach ($c as $key => $value) {
            echo "Kulcs = ".$key;
            echo "</br>";
            echo "Érték = ".$value;
            echo "</br>";
            if ($value == "") {
                $menu .= '  <li class="nav-item"> 
                            <a id="navcsik" href="'.SITE_ROOT.$menuitem['url'].'" 
                            '.($menuitem['url']==$sItems[0] ? "class='nav-link active'":"nav-link").'
                            aria-current="page" 
                            >'.$menuitem['nev'].'</a></li>';
            }
        }
        */


        $menu.="</ul>";
        return $menu;
	}
}

Menu::setMenu();
?>


