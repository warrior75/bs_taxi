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


		<?php if (isset($cour) && $cour['id'] != 0): ?>
			<div>
					<h2><?= $cour['title']; ?></h2>
					<p> <?= $cour['text_body'] ?> </p>
					 <button class="btn btn-primary" >Valider le cours</button>
			</div>       
		<?php else: ?>
			<table class="table">
				<tr class="info">
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
					<th>Téléphone</th>
					<th>Editer</th>
				</tr>
				<?php foreach($etudiant as $etudiant) : ?>
				<tr class="success">
					<td><?= $etudiant['firstname']; ?></td>
					<td><?= $etudiant['lastname'] ;?></td>
					<td><a href="mailto:<?= $etudiant['email'];?>" target="_top"><i class="fa fa-envelope"></i> </a><?= $etudiant['email'];?></td>
					<td>+33<?= $etudiant['phone']?></td>
					<td><button class="btn btn-danger">Supprimer</button></td>
				</tr>
				<?php endforeach ; ?>
			</table>
		<?php endif ; ?>
		
<?php $this->stop('main_content') ?>

