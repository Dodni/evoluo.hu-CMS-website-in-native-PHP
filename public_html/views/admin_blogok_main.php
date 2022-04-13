<h1 style="margin: 20px;">Ez az admin blogok view-ja.</h1>
<?php 
//$blogok_model = new Blogok_Model(); $blogok_model -> delete($b['id']);
?>
<title>Blogok</title>
<div class="container mt-5">
	<!-- Ez a rész külön egy almenü volt, ujblog url, Új Blog cím, admin szülő, sorrend 120-->
	<h3>Új blog létrehozás</h3>
        <form action="<?= SITE_ROOT ?>ujblog" method="post">
            <input type="text" name="cim" id="cim" placeholder="Blog címe" class="form-control my-3 bg-white text-black">
            <input type="text" name="rovidleiras" id="rovidleiras" placeholder="Rövid leírás" class="form-control my-3 bg-white text-black" cols="30" rows="2">
            <!-- <input type="text" name="hosszuleiras" id="hosszuleiras" placeholder="Hosszú leírás" class="form-control my-3 bg-dark text-black" cols="30" rows="10"> -->
            
		<!-- CK EDITOR RÉSZ-->
                <textarea type="text" name="hosszuleiras" id="hosszuleiras"></textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#hosszuleiras'))
                        .catch(error => {
                            console.error(error)
                        });
                </script> </br>
		<p class="text-secondary">(Lehet blogot készíteni későbbi dátummal. Csak a megadott napon fog megjelenni.)</p>
		<input type="date" name="datum" id="datum" value="2022-01-01" min="2021-01-01" max="2023-12-31" class="form-control text-black"> </br></br> 
            <button type="submit" value="Küldés" class="btn btn-primary">Blog létrehozása</button> </br></br>
        </form>
   </div>
  <div class="row">
    <?php foreach ($viewData['blog'] as $b) { ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    
                    <div class="card text-white bg-dark mt-5" style="width: 22rem;">
                    
                        <div class="card-black" style="padding: 5px;">
                          <!-- Kep ami a blogok/$id-re mutat -->
                          <p><a href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>">
                          <img src="..\images\github-logo.png" alt="GitHub" width="50" height="50" ></a></p>
                          <div class="card">
                          <h1><a class="hir" style="color: black" href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>"><?php echo $b['cim']; ?></a></h1></br>
                          
                          </div>
                          <!-- Kep ami a blogok/$id-re mutat-->
                          <p class="detail"><?php echo $b['rovidleiras']; ?> - <?php echo $b['datum']; ?></p>
        
                          <div>
                            <!-- Ez lesz az edit button -->
                            <!-- A controllernek vissza kell adni OPEN EDIT CONTROLLER -->
                            <form action="<?php echo SITE_ROOT ?>edit/<?php echo $b['id']?>" method="POST">
                            <button type="submit" name="id" value="<?php echo $b['id']?>" class="btn btn-success">Edit</button> </br>
                            </form>
    </br>
                            <!-- Ez lesz az delete button -->
                            <form action="<?php echo SITE_ROOT ?>delete/<?php echo $b['id']?>" method="POST">
                            <button type="submit" name="id" value="<?php echo $b['id']?>" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
        </br>

        
    



