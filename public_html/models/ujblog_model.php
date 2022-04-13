<?php

class Ujblog_Model
{
    public function get_data($vars)
    {
        $retData['eredmeny'] = "";
        try {
            $connection = Database::getConnection();
            $sql = "INSERT INTO blog (cim,rovidleiras,hosszuleiras,datum) VALUES('".$vars['cim']."','".$vars['rovidleiras']."','".$vars['hosszuleiras']."','".$vars['datum']."')";
            $stmt = $connection->query($sql);
            $retData['uzenet'] = "Köszönjük!";
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