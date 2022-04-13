<?php

class Bead_Model
{
    public function beadBeallit($vars)
    {
        //var_dump($vars);
        switch ($vars['ertek']) {
            case 1:
                //echo " donat ";
                //echo " itt vagyok ";
                $id = 1;
                    $name = "donat";
                    $email = "feherdonat99@gmail.com";
                    //var_dump($vars);
                    $retData['eredmeny']= "";
                    try {
                        $connection = Database::getConnection();
                        $sql = "UPDATE kapcsolatbeallit SET name = '$name', email = '$email' WHERE id = $id";
                        $stmt = $connection->query($sql);
                        $edit = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $retData['beadbeallit'] = $edit;
                        $retData['eredmeny'] = "OK";
                    } catch (PDOException $e) {
                        $retData['eredmeny'] = "ERROR";
                        $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
                    }
                    //Teszteléshez
                    //var_dump($retData);
                    return $retData;
                    //var_dump($id);
                break;
            case 2:
                //echo " gabor ";
                $id = 1;
                    $name = "gabor";
                    $email = "gabor.orban1@raccoonlab.hu";
                    //var_dump($vars);
                    $retData['eredmeny']= "";
                    try {
                        $connection = Database::getConnection();
                        $sql = "UPDATE kapcsolatbeallit SET name = '$name', email = '$email' WHERE id = $id";
                        $stmt = $connection->query($sql);
                        $edit = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $retData['beadbeallit'] = $edit;
                        $retData['eredmeny'] = "OK";
                    } catch (PDOException $e) {
                        $retData['eredmeny'] = "ERROR";
                        $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
                    }
                    //Teszteléshez
                    //var_dump($retData);
                    return $retData;
                    //var_dump($id);
                break;
        }
        
        

    }

    public function getEmail()
    {
        //var_dump($vars);
        $retData['eredmeny']= "";
        try {
            $connection = Database::getConnection();
            $sql = "SELECT kapcsolatbeallit.email
            FROM kapcsolatbeallit
            WHERE kapcsolatbeallit.id = 1";
            $stmt = $connection->query($sql);
            $edit = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $retData['beadbeallit'] = $edit;
            $retData['eredmeny'] = "OK";
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
        }
        //Teszteléshez
        //var_dump($edit);
        return $retData;
        //var_dump($id);
    }
}

?>