<?php

class Kapcsolat_Model
{
	public function post_data($vars)
	{
		$retData['eredmeny'] = "";
        try {
            $connection = Database::getConnection();
            $sql = "INSERT INTO kapcsolat (nev,email,telefonszam,uzenet) VALUES('".$vars['nev']."','".$vars['email']."','".$vars['telefonszam']."','".$vars['uzenet']."')";
            $stmt = $connection->query($sql);
			$post = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['post'] = $post;
			$retData['eredmeny'] = "OK";
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Adatbazis hiba: ".$e->getMessage()."!";
        }
        //Teszteleshez
        //var_dump($retData);
        return $retData;
	}
}

?>