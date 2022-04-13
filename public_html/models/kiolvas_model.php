<?php

class Kiolvas_Model
{
	public static function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT menu.tartalom
			FROM menu
			WHERE menu.url = '$vars'";
			$stmt = $connection->query($sql);
			$tartalom = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['eredmeny'] = $tartalom;
            		$retData['uzenet'] = "Köszönjük!";
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		echo $retData['eredmeny'][0]['tartalom'];
		//return $retData;

	}
}
?>