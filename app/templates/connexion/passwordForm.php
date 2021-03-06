<?php 
    $role = $_SESSION['user']['role'];
      
    if ($role=='admin') {
             $this->layout('layoutAdmin', [
            'title' => 'admin',
            'cour' => $cour,
            'organisedThemes' => $organisedThemes,
            'messages' => $messages,

            ]);
    } 
    if ($role=='formateur') {
            $this->layout('layoutFormateur', [
            'title' => 'formateur',
            'cour' => $cour,
            'organisedThemes' => $organisedThemes,
            'messages' => $messages,
            ]);
    } 
    if ($role=='etudiant') {
            $this->layout('layoutEtudiant', [
            'title' => 'etudiant',
            'cour' => $cour,
            'organisedThemes' => $organisedThemes,
            'messages' => $messages,
            ]);
    } 
?>

<?php $this->start('main_content') ?>
            <!-- Ajout user -->
    <section id="add-user">

            <div class="row">
                <div class="col-lg-12">
              
                    <form method="POST"  action="<?php echo $this->url('resetPassword') ; ?>">
    
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                            <h2 class="section-heading">Nouveau  mot de passe</h2>
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

