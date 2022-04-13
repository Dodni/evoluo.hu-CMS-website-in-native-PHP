<?php

class Admin_Model
{
    public function adminLetrehoz($vars)
    {
        //var_dump($vars);
        $retData['eredmeny']= "";
        try {
            $connection = Database::getConnection();
            $sql = "INSERT INTO felhasznalok (bejelentkezes, jelszo) VALUES ('".$vars['bejelentkezes']."','".sha1($vars['jelszo'])."');";
            $stmt = $connection->query($sql);
            $letrehoz = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $retData['letrehoz'] = $letrehoz;
            $retData['eredmeny'] = "OK";
            //echo "Sikeres regisztráció!";
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
        }
        //Teszteléshez
        //var_dump($letrehoz);
        //echo "itt vagyok";
        return $retData;
        //var_dump($id);
    }

    public function adminModosit($vars)
    {
        

            $bejelentkezes = $_REQUEST['bejelentkezes'];
			$jelszo = $_REQUEST['jelszo'];
			

			$retData['eredmeny']= "";
			try {
				$connection = Database::getConnection();
                //var_dump($id);
				$sql = "UPDATE felhasznalok SET jelszo = '".sha1($vars['jelszo'])."' WHERE bejelentkezes = '$bejelentkezes'";
				$stmt = $connection->query($sql);
				$edit = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$retData['getone'] = $edit;
				$retData['eredmeny'] = "OK";
                //echo "Jelszó változtatás sikeres!";
			} catch (PDOException $e) {
				$retData['eredmeny'] = "ERROR";
				$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
                echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
			}
			//Teszteléshez
			//var_dump($retData);
            
			return $retData;
			//var_dump($id);
    }

    public function adminTorol($vars)
    {
        $bejelentkezes = $_REQUEST['bejelentkezes'];
        //Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "DELETE FROM felhasznalok WHERE bejelentkezes = '$bejelentkezes'";
			$stmt = $connection->query($sql);
			$delete = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['delete'] = $delete;
			$retData['eredmeny'] = "OK";
            //echo "Sikeres törlés!";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
    }

    public function adminLekerMind()
    {
        //var_dump($vars);
        $retData['eredmeny']= "";
        try {
            $connection = Database::getConnection();
            $sql = "SELECT felhasznalok.bejelentkezes FROM felhasznalok";
            $stmt = $connection->query($sql);
            $leker = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $retData['leker'] = $leker;
            $retData['eredmeny'] = "OK";
            //echo "Sikeres regisztráció!";
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            echo "Valami baj történt! Adatbázis hiba: ". $e->getMessage() . "!";
        }
        //Teszteléshez
        //var_dump($letrehoz);
        //echo "itt vagyok";
        return $retData;
        //var_dump($id);
    }
}

?>