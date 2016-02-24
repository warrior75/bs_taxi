<?php $this->layout('layoutAdmin', ['title' => 'admin']) ?>

<?php $this->start('main_content') ?>
            <!-- Ajout user -->
    <section id="add-user">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Changer de mot de passe</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
              
                    <form method="POST"  action="<?php echo $this->url('resetPassword') ; ?>">
    
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                              <?php if (isset($error['password'])) : ?>
                                <p class="bg-danger" ><?php echo $error['password']; ?></p>
                             <?php endif; ?>
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mot de passe *" name="password" id="password" required data-validation-required-message="Veuillez saisir votre mot de passe *">
                                    
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirmer Mot de passe *" name="confirmPassword" id="confirmPassword" required data-validation-required-message="Veuillez confirmer votre mot de passe">
                                    
                                </div>

                                <button type="submit" name="reset" class="btn btn-primary">Changer</button>
                            
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </section>  
<?php $this->stop('main_content') ?>

