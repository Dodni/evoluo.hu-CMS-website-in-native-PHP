<title>Blog</title>
        <div class="row">
            <?php foreach ($viewData['blog'] as $b) { ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    
                    <div class="card text-white bg-dark mt-5" style="width: 22rem;">
                    
                        <div class="card-black" style="padding: 5px;">
                            	<div class="position-absolute top-0 start-50 translate-middle">
					<p><a id="blog" class="blog" style="background:none;" href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>">
				</div>				
				<img style="width: 100%;" src="images\github-logo.png" alt="GitHub" width="300" height="300" ></a></p>
                            <div class="card">
                                <h1>
                            <a class="hir" style="color: black" href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>"><?php echo $b['cim']; ?></a>
                            </h1></div>
                            
                            <p class="detail"><?php echo $b['rovidleiras']; ?> - <?php echo $b['datum']; ?></p>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
            </br>


