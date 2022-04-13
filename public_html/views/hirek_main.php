<?php foreach ($viewData['hirek'] as $hir) { ?>
    <article>
        <img src="images\github-logo.png" alt="GitHub" width="30" height="30" href="https://github.com/Dodni">
        <h1><a class="hir" href="<?php echo SITE_ROOT ?>hirek/<?php echo $hir['id']; ?>"><?php echo $hir['cim']; ?></a></h1><br>
        <p class="detail"><?php echo $hir['bejelentkezes']; ?> - <?php echo $hir['ido']; ?></p>

        <p><?php echo $hir['tartalom']; ?></p>
    </article>
<?php } ?>