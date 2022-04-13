
<?php 

?>
<title>Menüpontok</title>
<h1 style="margin: 20px;">Ez az admin almenüje a menü pontok.</h1>
<div class="table-responsive" style="margin: 40px;">
<table id="datatable1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Url</th>
                                        <th>Név</th>
                                        <th>Szülő</th>
                                        <th>Sorrend</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       foreach ($viewData['getall'] as $g) { ?>
                                    <tr>
                                        <td><?=$g['url']?></td>
                                        <td><?= $g['nev']?></td>
                                        <td><?= $g['szulo']?></td>
                                        <td><?= $g['sorrend']?></td>
                                        <td>
                                            <!-- Ez lesz az edit button -->
                                            <form action="<?php echo SITE_ROOT ?>edit/<?php echo $g['url']?>" method="POST">
                                            <button type="submit" name="url" value="<?php echo $g['url']?>" class="btn btn-success btm-sm">Edit</button> </br>
                                            </form>
                                        </td>
                                        <td>
                                            <!-- Ez lesz az delete button -->
                                            <form action="<?php echo SITE_ROOT ?>menuponttorles/<?php echo $g['url']?>" method="POST">
                                            <button type="submit" name="url" value="<?php echo $g['url']?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
</div>
<div class="sticky-top" style="margin: 40px;">
    <ul>
        <?php foreach ($viewData['getall'] as $g) { ?>
        
        <?php } ?>
    </ul>
	<div stlye="z-index: 10">
    <h3>Menüpont létrehozás:</h3>
            <form action="<?php SITE_ROOT?>menupontletrehozas/" method="post">
                <label for=""><b>Menüpont neve</b>:</label> </br>
                <input type="text" name="nev" id="nev" required> </br>
                <label for=""><b>Menüpont url-je </b>KISBETŰVEL ÉS ÉKEZETEK NELKÜL, FONTOS!! :</label> </br>
                <input type="text" name="url" id="url" required> </br>
                <label for=""><b>Szülő</b> kisbetűvel (kivéve admin):</label> </br>
                <input type="text" name="szulo" id="szulo"></br>
                <label for=""><b>Sorrend</b> (1-128):</label> </br>
                <input type="text" name="sorrend" id="sorrend" required> </br>
                <label for=""><b>Tartalom</b>:</label> </br>
                <!-- CK EDITOR RÉSZ-->
                <textarea type="text" name="tartalom" id="tartalom"></textarea> </br>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#tartalom'))
                        .catch(error => {
                            console.error(error)
                        });
                </script> </br>
                <button type="submit" value="menupontletrehozas"class="btn btn-primary">Létrehoz</button>
            </form>
	</div>
</div>
