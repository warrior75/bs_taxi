<?php $this->layout('layoutEtudiant', [
		'title' => 'etudiant',
		'organisedThemes' => $organisedThemes,
		'messages' => $messages,
		'infos' => $infos,
		]) ?>

<?php $this->start('main_content') ?>
	    <?php if (isset($infos)) : ?>
			<div class="col-md-4	 col-md-offset-4">
            	<p class="bg-success" ><?php echo $infos; ?></p>
    		</div>
    	<?php endif; ?>


		<?php if (isset($cour) && $cour['id'] != 0): ?>
			<div class="panel panel-default">
					<div class="panel-heading"><h2 class="cour_title"><?= $cour['title']; ?></h2></div>
					<div class="panel-body"><p class="cour_body"> <?= $cour['text_body'] ?> </p></div>
			</div>       
					 <a class="btn btn-primary" href="<?= $this->url('etudiantValidateCours',['id'=>$cour['id']]);?>">Valider le cours</a>
		<?php else: ?>
			<div class="panel panel-default">
					<div class="panel-heading"><h2>Bienvenue sur votre plateforme </h2></div>
					<div class="panel-body"><p>
						Notre centre de formation est spécialisé dans la formation de chauffeurs de taxi parisien depuis de nombreuses années. En bordure de Paris, notre centre accueille des candidats désireux de trouver un emploi ou de se reclasser professionnellement. Le centre est installé sur le même site qu'une importante société de location de taxis.
						Le centre est agréé par la Préfecture de Police et inscrit à la formation professionnelle.</p>
					<p>
						Le centre a une superficie totale de 230 m².
						Trois salles de cours.
						Trois véhicules école (avec boite automatique).
						Une salle de repos avec distributeurs.

					</p>
					
					<h3>La formation théorique</h3>
					<p>S'effectue en salle de cours, toutes les salles sont équipées d'un système de vidéo-projection. Exercices et examens blancs sont pratiqués chaque semaine pour contrôle des connaissances.</p>

					<h3>La formation pratique</h3>
					<p>Trois véhicules équipés du matériel taxi (horodateur et compteur). Ces véhicules sont ceux utilisés lors du passage de l'examen.</p>
 
					<h3>Les pauses</h3>
					<p>Entre 2 cours, vous pourrez utiliser la salle de détente équipée de distributeurs de boissons (chaudes et froides) ainsi que de friandises et d'un micro-ondes vous permettant de rechauffer votre déjeuner.</p>

					</div>
    		</div>
		<?php endif ; ?>
		
<?php $this->stop('main_content') ?>

