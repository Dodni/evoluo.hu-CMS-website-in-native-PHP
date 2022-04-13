<?php

class Menupont_Model
{
    public function menuGetAll()
    {
        $retData['eredmeny']= "";
        try {
            $connection = Database::getConnection();
            $sql = "SELECT menu.url, menu.nev, menu.szulo, menu.sorrend
                    FROM menu;";
            $stmt = $connection->query($sql);
            $getall = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $retData['getall'] = $getall;
            //var_dump($letrehoz);
            $retData['eredmeny'] = "OK";
            //echo "Sikeres valami";
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            //echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
        }
        //Teszteléshez
        //var_dump($letrehoz);
        //echo "itt vagyok";
        return $retData;
        //var_dump($id);
    }
    public function menupontLetrehoz($vars)
    {
        $url = $_REQUEST['url'];
		$nev = $_REQUEST['nev'];
		$jogosultsag = $_REQUEST['jogosultsag'];
		$sorrend = $_REQUEST['sorrend'];
        //var_dump($vars);
        $retData['eredmeny']= "";
        try {
            $connection = Database::getConnection();
            $sql = "INSERT INTO menu (url,nev,szulo,sorrend,jogosultsag,tartalom) VALUES ('".$vars['url']."','".$vars['nev']."','".$vars['szulo']."','".$vars['sorrend']."','100','".$vars['tartalom']."');";
            $stmt = $connection->query($sql);
            $letrehoz = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $retData['letrehoz'] = $letrehoz;
            //var_dump($letrehoz);
            $retData['eredmeny'] = "OK";
            //echo "Sikeres regisztráció!";
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            //echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
        }
        //Teszteléshez
        //var_dump($letrehoz);
        //echo "itt vagyok";
        return $retData;
        //var_dump($id);
    }

    public function menupontModosit($vars)
    {
            //var_dump($vars);    
			$retData['eredmeny']= "";
			try {
				$connection = Database::getConnection();
                
				$sql = "UPDATE menu SET nev = '".$vars['nev']."', szulo = '".$vars['szulo']."', sorrend = ".$vars['sorrend'].", tartalom = '".$vars['tartalom']."' WHERE url = '".$vars['url']."'";
                $stmt = $connection->query($sql);                
				$edit = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //var_dump($edit);
				$retData['getone'] = $edit;
				$retData['eredmeny'] = "OK";
                //echo "Sikeres változtatás!";
			} catch (PDOException $e) {
				$retData['eredmeny'] = "ERROR";
				$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
                //echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
			}
			//Teszteléshez
			//var_dump($retData);
            
			return $retData;
			//var_dump($id);
    }

    public function menupontTorol($vars)
    {
        //$bejelentkezes = $_REQUEST['bejelentkezes'];
        //Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "DELETE FROM menu WHERE url = '".$vars['url']."'";
			$stmt = $connection->query($sql);
			$delete = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['delete'] = $delete;
			$retData['eredmeny'] = "OK";
            //echo "Sikeres törlés!";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            //echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
    }

    public function getOne($url)
	{
        //var_dump($url['url']);
        //echo "</br>";
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT menu.url, menu.nev, menu.szulo, menu.sorrend, menu.tartalom
				    FROM `menu`
				    WHERE menu.url = '".$url['url']."'";
            
			$stmt = $connection->query($sql);
			$g = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['menu'] = $g;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            //echo $retData['uzenet'];
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
		//var_dump($id);
	}
}

?>