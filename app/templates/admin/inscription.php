<?php $this->layout('layoutAdmin', [
        'title' => 'admin',
        'organisedThemes' => $organisedThemes,
        'etudiant' => $etudiant,
        'formateur'=>$formateur,
        'messages' => $messages,
        'cour' => $cour,
        ]) ?>

<?php $this->start('main_content') ?>
	        <!-- Ajout user -->
    <section id="add-user">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ajout Utilisateur</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
              
                    <form method="POST"  action="<?php echo $this->url('register') ; ?>">
    
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                              <?php if (isset($infos)) : ?>
                                <p class="bg-success" ><?php echo $infos; ?></p>
                             <?php endif; ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Prénom *" name="firstname" id="firstname" required data-validation-required-message="Veuillez saissir votre prénom *">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom *" name="lastname" id="lastname" required data-validation-required-message="Veuillez saissir votre nom">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Veuillez saisir votre adresse email">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Numéro de tel *" name="phone" id="phone" required data-validation-required-message="Veuillez saisir votre adresse email">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="role">
                                        <option value="admin">Administrateur</option>
                                        <option value="formateur">Formateur</option>
                                        <option value="etudiant" selected>Etudiant</option>
                                    </select>
                                </div>

                                <button type="submit" name="addUser" class="btn btn-primary">Ajouter</button>
                            
                        </div>
                    </form>
                </div>
        </div>
    </section>	
<?php $this->stop('main_content') ?>

