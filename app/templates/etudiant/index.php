<?php $this->layout('layoutEtudiant', [
		'title' => 'etudiant',
		'organisedThemes' => $organisedThemes,
		'messages' => $messages
		]) ?>

<?php $this->start('main_content') ?>
	    <?php if (isset($infos)) : ?>
			<div class="col-md-4 col-md-offset-4">
            	<p class="bg-success" ><?php echo $infos; ?></p>
    		</div>
    	<?php endif; ?>


		<?php if (isset($cour)) :?>
			<div class="cour">
					<h2 class="cour_title"><?= $cour['title']; ?></h2>
					<p class="cour_body"> <?= $cour['text_body'] ?> </p>
					
			</div>       
		<?php endif; ?>
		
<?php $this->stop('main_content') ?>

