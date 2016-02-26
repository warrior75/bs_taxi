<?php $this->layout('layoutAdmin', [
		'title' => 'admin',
		'organisedThemes' => $organisedThemes,
		'etudiant' => $etudiant,
		'formateur'=>$formateur
		
		]) ?>

<?php $this->start('main_content') ?>
        <?php if (isset($infos)) : ?>
			<div class="col-md-4 col-md-offset-4">
            	<p class="bg-success" ><?php echo $infos; ?></p>
    		</div>
    	<?php endif; ?>


		<?php if (isset($cour) && $cour['id'] != 0) :?>
			<div>
					<h2><?= $cour['title']; ?></h2>
					<p> <?= $cour['text_body'] ?> </p>
					 <button class="btn btn-primary" >Valider le cours</button>
			</div>       
		<?php endif; ?>
<?php $this->stop('main_content') ?>

