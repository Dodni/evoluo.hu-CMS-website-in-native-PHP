<?php

class Beallitasok_Model
{
    public function getChecked()
    {
        //Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT *
			FROM kapcsolatbeallit";
			$stmt = $connection->query($sql);
			$beallitasok = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['beallitasok'] = $beallitasok;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            		echo "Valami gond tortent!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
    }
	public static function getAllEmail()
	{
	//Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT *
			FROM kapcsolat";
			$stmt = $connection->query($sql);
			$kapcsolat = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['kapcsolat'] = $kapcsolat;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            echo "Valami gond tortent!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
	}

	public static function emailTorol($vars)
    {
		//var_dump($vars);
		//$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "DELETE FROM kapcsolat WHERE id = $vars[0]";
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
		//return $retData;
    }
}