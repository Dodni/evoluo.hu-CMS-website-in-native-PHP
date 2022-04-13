<?php

class Blog_Model
{
	
	public function get_data()
	{
		//Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT blog.id, blog.cim, blog.rovidleiras, blog.datum
			FROM blog
			WHERE blog.datum <= NOW()
			ORDER BY blog.datum DESC";
			$stmt = $connection->query($sql);
			$blog = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['blog'] = $blog;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
	}

	//id valtozot vár
	public function mutat($id)
	{
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT blog.id, blog.cim, blog.rovidleiras, blog.hosszuleiras, blog.datum
				FROM blog
				WHERE blog.id = ?";
			$stmt = $connection->prepare($sql);
			$stmt -> execute(array($id));
			$blog = $stmt->fetch(PDO::FETCH_ASSOC);
			$retData['blog'] = $blog;
			$retData['eredmeny'] = "OK";
			
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}
		

		//Teszteléshez
		//var_dump($retData);
		return $retData;
	}

	

	
}

?>