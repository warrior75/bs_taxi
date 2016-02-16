<?php $this->layout('layout', ['title' => 'Index']) ?>

<?php $this->start('main_content') ?>
	<p>Vous êtes connécté</p>
	<p> Email : <?= $email ?></p>
	<p> Mot de passe : <?= $password ?></p>
<?php $this->stop('main_content') ?>

