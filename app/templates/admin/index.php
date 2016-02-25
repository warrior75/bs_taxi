<?php $this->layout('layoutAdmin', [
		'title' => 'admin',
		'organisedThemes' => $organisedThemes,
		''
		]) ?>

<?php $this->start('main_content') ?>
        <?php if (isset($infos)) : ?>
			<div class="col-md-4 col-md-offset-4">
            	<p class="bg-success" ><?php echo $infos; ?></p>
    		</div>
    	<?php endif; ?>


		<?php if (isset($cour)) :?>
			<div>
				<?php foreach ($cour as $value) :?>
					<h2><?= $value['title']; ?></h2>
					<p> <?= $value['text_body'] ?> </p>
				<?php endforeach; ?>
			</div>       
		<?php endif; ?>
<?php $this->stop('main_content') ?>

