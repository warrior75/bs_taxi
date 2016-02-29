<?php $this->layout('layoutFormateur', [
		'cour' => $cour,
		'title' => 'formateur',
		'etudiant' => $etudiant,
		'organisedThemes' => $organisedThemes,
		'messages' => $messages,
		'nbCoursTotal' => $nbCoursTotal,
		'summaryCours' => $summaryCours,
		'errors' => $errors,
		'infos' => $infos
		]) ?>


<?php $this->start('main_content') ?>
	    <?php if (isset($errors)) : ?>
			<div class="col-md-4 col-md-offset-4">
            	<p class="bg-danger" ><?php echo $errors; ?></p>
    		</div>
    	<?php endif; ?>

    	 <?php if (isset($infos)) : ?>
			<div class="col-md-4 col-md-offset-4">
            	<p class="bg-succes" ><?php echo $infos; ?></p>
    		</div>
    	<?php endif; ?>


		<?php if (isset($cour) && $cour['id'] != 0) :?>
			<div>
					<h2 class="cour_title"><?= $cour['title']; ?></h2>
					<p class="cour_body"> <?= $cour['text_body'] ?> </p>
			</div>       
		<?php else :?>
			<table class="table" >
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
                    <th>Progression</th> 
					<th>Téléphone</th>
				</tr>
				<?php foreach($etudiant as $etudiant) : ?>
				<tr>
					<td><?= $etudiant['firstname']; ?></td>
					<td><?= $etudiant['lastname'] ;?></td>
					<td><?= $etudiant['email'];?></td>
                    <td>
                        <div class="progress progress-striped active">
                        <?php $progress = ($summaryCours[$etudiant['id']]['nbCoursValide'] * 100)/$nbCoursTotal; ?>
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?= $progress; ?>" aria-valuemin="0" aria-	valuemax="100" style="width: <?= $progress; ?>%">
                        <?php echo round($progress);?>%
                        </div>
                        </div> 
                    </td>   
					<td>+33<?= $etudiant['phone']?></td>
                 
				</tr>
				<?php endforeach ; ?>
			</table>
		<?php endif ; ?>

		
<?php $this->stop('main_content') ?>

