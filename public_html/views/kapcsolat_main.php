<?php
/* 
$beadmodell = new Bead_Model;
//var_dump($vars);
$retData = $beadmodell -> getEmail();
//var_dump($retData['beadbeallit']['0']['email']);
*/
?>
<title>Kapcsolat</title>
<div class="container mt-5" style="margin: 40px;">
    <h1>Ez a kapcsolat view.</h1>
    </br>
    <div class="d-flex justify-content-center">
        <form action="<?php echo SITE_ROOT?>kapcsolatbead/" method="POST">
            </br><div class="form-group"><label for="">Név*</label><input class="form-control my-3 bg-white text-black" type="text" name="nev" id="nev" required></div>
            </br><div class="form-group"><label for="">E-mail*</label><input class="form-control my-3 bg-white text-black" type="text" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></div>
            </br><div class="form-group"><label for="">Telefonszám*</label><input class="form-control my-3 bg-white text-black" type="text" name="telefonszam" id="telefonszam" required pattern="/^+[0-9]"></div>
            </br><div class="form-group"><label for="">Üzenet*</label><textarea class="form-control my-3 bg-white text-black" type="text" name="uzenet" id="uzenet" cols="30" rows="10" size="100" required></textarea></div>
            </br><div class=""><button type="submit" value="Küldés" class="btn-primary rounded">Küldés</button></div>
        </form>
    </div>
    
</div>
<?php 
$_REQUEST['nev'];
echo $_GET['nev'];
echo $_GET['email'];
echo $_GET['telefonszam'];
echo $_GET['uzenet'];
?>
<!-- https://formsubmit.co/<?php echo $retData['beadbeallit']['0']['email']?> -->
