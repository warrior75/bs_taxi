<?php $this->layout('layoutGeneral', ['title' => 'etudiant']) ?>

<?php $this->start('main_content') ?>
	 <div class="col-md-4 col-md-offset-4">
        <?php if (isset($infos)) : ?>
            <p class="bg-success" ><?php echo $infos; ?></p>
    	<?php endif; ?>
    </div>       
<?php $this->stop('main_content') ?>

