<?php $this->layout('layoutFormateur', [
		'title' => 'formateur',
		'organisedThemes' => $organisedThemes,
		'etudiant' => $etudiant,
		'messages' => $messages,
		'nbCoursTotal' => $nbCoursTotal,
		'nbCoursValide' => $nbCoursValide,
		'nbCoursProgress' => $nbCoursProgress,
		'nbCoursInvalide' => $nbCoursInvalide

		]) ?>


<?php $this->start('main_content') ?>
	<?php echo "Valide :"; debug($nbCoursValide); ?>
	<?php echo "Progress :"; debug($nbCoursProgress); ?>
	<?php echo "Total : "; debug($nbCoursTotal); ?>
	<?php echo "Invalide : "; debug($nbCoursInvalide); ?>
	<?php  ?>
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

