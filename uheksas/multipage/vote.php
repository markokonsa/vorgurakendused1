	<?php
	    require_once('../head.html');
	    $pildid = glob('pildid/*.{jpg}', GLOB_BRACE);
	 ?>

	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">

	 <?php foreach($pildid as $pilt):
	 $position = array_search($pilt, $pildid);?>
               <p>
               			<label for=
               			    <?php echo "$position" ?>
               			 >
               				<img src=
               				    <?php echo "$pilt"?>
               				alt="pilt" height="100" />
               			</label>
               			<input type="radio" value=
               			    <?php echo "$position" ?>
               			 id=
               			    <?php echo "$position" ?>
               			 name="pilt"/>
               		</p>
            <?php endforeach; ?>
		<br/>
		<input type="submit" value="Valin!"/>
	</form>
	<?php require_once('../foot.html');?>

