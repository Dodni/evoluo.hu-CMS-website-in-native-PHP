<?php

class Blogok_Model
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

	public function delete($id)
	{
		//Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "DELETE FROM blog WHERE id = ".$id['id']."";
			$stmt = $connection->query($sql);
			$delete = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['delete'] = $delete;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
	}

	public function getOne($id)
	{
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT blog.id, blog.cim, blog.rovidleiras, blog.hosszuleiras, blog.datum
				FROM blog
				WHERE blog.id = ".$id['id']."";
			$stmt = $connection->query($sql);
			$getone = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['getone'] = $getone;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
		//var_dump($id);
	}

	public function edit($vars)
	{
		if(isset($_REQUEST['update'])){
			$id = $_REQUEST['id'];
			$cim = $_REQUEST['cim'];
			$rovidleiras = $_REQUEST['rovidleiras'];
			$datum = $_REQUEST['datum'];
			$hosszuleiras = $_REQUEST['hosszuleiras'];
			//var_dump($vars);
			$retData['eredmeny']= "";
			try {
				$connection = Database::getConnection();
				$sql = "UPDATE blog SET cim = '$cim', rovidleiras = '$rovidleiras', datum = '$datum', hosszuleiras = '$hosszuleiras' WHERE id = $id";
				$stmt = $connection->query($sql);
				$edit = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$retData['getone'] = $edit;
				$retData['eredmeny'] = "OK";
			} catch (PDOException $e) {
				$retData['eredmeny'] = "ERROR";
				$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
			}
			//Teszteléshez
			//var_dump($retData);
			return $retData;
			//var_dump($id);
		}
		
		

		
		//return $vars;
	}



}
?>