<?php $this->layout('layoutConnexion', ['title' => 'connexion']) ?>

<?php $this->start('main_content') ?>
    
    <!-- connexion Section -->
    <section id="connexion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Connexion</h2>
                    <h3 class="section-subheading text-muted">Connectez-vous afin d'accéder à votre espace perso</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
               

                    <form method="POST"  action="<?php echo $this->url('formConnexion') ; ?>">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <?php if (isset($error['email'])) : ?>
                                    <p class="bg-danger" ><?php echo $error['email']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($error['password'])) : ?>
                                    <p class="bg-danger" ><?php echo $error['password']; ?></p>
                                <?php endif; ?>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" name="email" id="email" required data-validation-required-message="Veuillez saisir votre adresse emai">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Votre Mot de Passe *" name="password" id="password" required data-validation-required-message="Veuillez saissir votre mot de passe.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            
                                <button type="submit" name="action" class="btn btn-primary">Connexion</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $this->stop('main_content') ?>
