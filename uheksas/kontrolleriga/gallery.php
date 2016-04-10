
	<h3>Fotod</h3>
	<div id="gallery">

	 <?php foreach($pildid as $pilt): ?>
           <img src=
            <?php echo "$pilt" ?>
             alt="pilt" />
        <?php endforeach; ?>
	</div>
