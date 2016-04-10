	<?php
	 require_once('../head.html');
     $pildid = glob('pildid/*.{jpg}', GLOB_BRACE);
	?>
	<h3>Fotod</h3>
	<div id="gallery">

	 <?php foreach($pildid as $pilt): ?>
           <img src=
            <?php echo "$pilt" ?>
             alt="pilt" />
        <?php endforeach; ?>
	</div>
	<?php require_once('../foot.html');?>
