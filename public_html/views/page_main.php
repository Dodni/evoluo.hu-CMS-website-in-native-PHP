<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"> </script>

		<script src="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"></script>
		<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
		<style>
			.container{
				width:80%;
				max-width: 800px;
				margin:0 auto;
			}
		</style>
	</head>
	<body>
		<header style="margin: 10px 10px 0px 10px">
			<div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
			<h1 style="margin: 10px;" class="header">Donát blogja</h1>
		</header>
		
		
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</br>
</br>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php 
	//echo Menu::getMenu($viewData['selectedItems']); 
	echo Menu::getMenuV2($viewData['selectedItems']);
	?>
        </li>
	</ul>
    </div>
  </div>
</nav>
<div style="margin:20px">
		<?php if($viewData['render']) include($viewData['render']); ?>
</div>	
</body>
</br>
<footer style="z-index: 11000">
		&copy; Fehér Donát, minden jog fentartva.
</footer>
	
</html>
