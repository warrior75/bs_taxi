<?php $this->layout('layoutFormateur', [
		'title' => 'formateur',
		'organisedThemes' => $organisedThemes
		]) ?>

<?php $this->start('main_content') ?>
	    <?php if (isset($infos)) : ?>
			<div class="col-md-4 col-md-offset-4">
            	<p class="bg-success" ><?php echo $infos; ?></p>
    		</div>
    	<?php endif; ?>

		<?php if (isset($cour)) :?>
			<div>
					<h2><?= $cour['title']; ?></h2>
					<p> <?= $cour['text_body'] ?> </p>
			</div>       
		<?php endif; ?>
<?php $this->stop('main_content') ?>

