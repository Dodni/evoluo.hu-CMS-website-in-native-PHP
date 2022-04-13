	<?php
$beallitasokmodell = new Beallitasok_Model;
$retData = $beallitasokmodell -> getChecked();
$retData2 = $beallitasokmodell -> getAllEmail();
if ($retData['beallitasok']['0']['name'] == 'gabor') {
    //echo "Gábor vagyok, az apád";
    $szam = 2;
} else {
    //echo "Én vagyok Donát az apád";
    $szam = 1;
}

?>
<title>Beállítások</title>
<h1 style="margin: 20px;">Ez az admin almenüje a beállítások.</h1>
<div class="d-flex justify-content-center">
    
    <form action="<?php echo SITE_ROOT?>bead/" method="post">
        <h4>Válassz e-mailt a kapcsolat form beállításához:</h4>
        <input type="radio" id="1" name="ertek" value="1" <?php if($szam==1) echo "checked" ?> >
        <label for="">feherdonat99@gmail.com</label> </br>
        <input type="radio" id="2" name="ertek" value="2" <?php if($szam==2)echo "checked" ?> >
        <label for="">gabor.orban1@raccoonlab.hu</label> </br> </br>
        <button type="submit" value="update" class="btn btn-primary">SUBMIT</button>
    </form>   
</div>
</br>
<div class="sticky-md-top" style="margin: 20px">
	<h3>Kapott formok a Kapcsolat view-ból:</h3> </br>
	<?php Beallitasok_Model::getAllEmail() ?>
<div class="table-responsive ">
<table id="datatable1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Név</th>
                                        <th>E-mail</th>
                                        <th>Telefonszám</th>
                                        <th>Üzenet</th>
                                        <th>Törlés</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       foreach ($retData2['kapcsolat'] as $g) { ?>
                                    <tr>
                                        <td><?=$g['nev']?></td>
                                        <td><?= $g['email']?></td>
                                        <td><?= $g['telefonszam']?></td>
                                        <td id="uzenet" style="width:500px"><?= $g['uzenet']?></td>
                                        <td>
                                            <!-- Ez lesz az delete button -->
                                            <form action="<?php echo SITE_ROOT ?>uzenettorles/<?php echo $g['id']?>" method="POST">
                                            <button type="submit" name="id" value="<?php echo $g['id']?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
</div>
</br>
</div>