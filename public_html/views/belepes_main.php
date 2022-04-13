<title>Belépés</title>
<h2 style="margin: 20px;">Belépés</h2>
<div class="d-flex justify-content-center">

<form action="<?= SITE_ROOT ?>beleptet" method="post">
    <label style="text-align: left" for="login">Felhasználó:</label><input class="bg-white text-black rounded" type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label style="text-align: left" for="password">Jelszó:</label><input class="bg-white text-black rounded" type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input class="button btn-primary rounded position-absolute start-50 translate-middle-x" type="submit" value="Küldés" class="">
</form>
</div>

<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
